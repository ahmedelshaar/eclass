<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DotenvEditor;
use Illuminate\Support\Facades\DB;
use Module;

class ThemeController extends Controller
{
    public function index()
    {
    	$env_files = [

            'DEFAULT_THEME' => env('DEFAULT_THEME'),
        ];

    	return view('admin.theme.edit', compact('env_files'));
    }

    public function update(Request $request)
    {
        if($request->default_theme == 'classic'){

            $env_keys_save = DotenvEditor::setKeys([
                'DEFAULT_THEME' => $request->default_theme
            ]);
    
            $env_keys_save->save();
    
            return back()->with('success', trans('flash.settingssaved'));

        }else{

            if(config('blizzard.MIX_THEME_FOLDER') == '' || !DB::table('api_keys')->where('id', '2')->first()->secret_key){
                return back()->with('deleted',__('Please configure theme before using it'));
            }

            $env_keys_save = DotenvEditor::setKeys([
                'DEFAULT_THEME' => $request->default_theme
            ]);
    
            $env_keys_save->save();
    
            return back()->with('success', trans('flash.settingssaved'));

        }
       
    }
}
