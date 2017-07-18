<?php

namespace App\Http\Controllers;

use App\Space;
use Illuminate\Http\Request;

class SpacesController extends Controller
{
    public function index()
    {
        $spaces = [];
        $free = 0;
        $taken = 0;

        for($i = 0; $i < 48; $i++) {
            $spaces[$i] = random_int(0, 1);

            if($spaces[$i] == 0) {
                $free++;
            } else {
                $taken++;
            }
        }

        $spaces2 = implode(',', $spaces);

        $input = [$spaces, $free, $taken];

        Space::create(['spaces' => $spaces2, 'free' => $free, 'taken' => $taken]);

        return $input;

    }

    public function showHistory() {

        $history = Space::orderBy('id', 'desc')->paginate(50);

        return view('admin.history.index', compact('history'));
    }

    public function showDetails($id) {

        $record = Space::findOrFail($id);

        $record->spaces = explode(',', $record->spaces);

        return view('admin.history.details', compact('record'));
    }

    public function deleteHistory(Request $request)
    {

        if(isset($request->details)) {

            $id = $request->details;

            return redirect('/admin/history/details/' . $id);
        }

        if(isset($request->multiple)) {

            if($request->checkBoxArray == null) {
                return redirect()->back();
            }

            $history = Space::findOrFail($request->checkBoxArray);

            foreach($history as $record){
                $record->delete();
            }

            session()->flash('history_selected', 'Selected history records have been deleted');
        }

        if(isset($request->historyId)) {

            $record = Space::findOrFail($request->historyId);
            $record->delete();

            session()->flash('history_deleted', 'History record has been deleted');

        }

        return redirect('/admin/history');
    }
}
