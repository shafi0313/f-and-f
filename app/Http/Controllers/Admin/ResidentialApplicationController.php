<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ResidentialApplication;
use Yajra\DataTables\Facades\DataTables;

class ResidentialApplicationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $residentialApplication = ResidentialApplication::query();
            return DataTables::of($residentialApplication)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '';
                    // if (userCan('slider-edit')) {
                    //     $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.sliders.edit', $row->id), 'row' => $row]);
                    // }
                    if (userCan('slider-delete')) {
                        $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.residential-applications.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    }
                    return $btn;
                })
                ->rawColumns(['content', 'image', 'is_active', 'action'])
                ->make(true);
        }
        return view('admin.residential-application.index');
    }
}
