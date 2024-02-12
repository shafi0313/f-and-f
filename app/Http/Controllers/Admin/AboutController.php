<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreAboutRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $text = $request->content;
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($text, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $imageTag = $dom->saveHTML($image);
            if (preg_match('/src="([^"]+)"/', $imageTag, $matches)) {
                if (isset($matches[1])) {
                    $srcAttribute = $matches[1];
                    if (strpos($srcAttribute, 'data:image') === 0) {
                        list($type, $data) = explode(';', $srcAttribute);
                        list(, $data) = explode(',', $data);
                        $imageData = base64_decode($data);
                        $uniqueId = uniqueId(10);
                        $image_name = $uniqueId . $item . '.webp';
                        $webpPath = '/uploads/images/about/' . $image_name;
                        if (file_put_contents(public_path($webpPath), $imageData)) {
                            $webpImage = Image::make(public_path($webpPath));
                            $webpImage->encode('webp', 80);
                            $webpImage->save();
                            $image->removeAttribute('src');
                            $image->setAttribute('src', $webpPath);
                        }
                    }
                }
            }
        }
        $requestData['content'] = $dom->saveHTML();

        try {
            $about->update($requestData);
            Alert::success('About Us', 'About us content has been updated successfully.');
        } catch (\Exception $e) {
            Alert::error('About Us', 'Something went wrong! Please try again.');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
