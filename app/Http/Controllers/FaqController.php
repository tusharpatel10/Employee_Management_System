<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = DB::table('table_faqs')->get();
        return view('faq-management-system.index', compact('faqs'));
    }

    public function faqStore(Request $request)
    {
        // step-1 Validate
        $request->validate(
            [
                'question' => 'required|string|max:255',
                'answer' => 'required|string'
            ],

            // Custom error messages
            [
                'question.required' => 'Please fill in the question field!',
                'answer.required' => 'Please fill in the answer field!'
            ]
        );

        // insert into Database
        try {
            $faqs = DB::table('table_faqs')->insert([
                'question' => $request->question,
                'answer' => $request->answer
            ]);
            return redirect()->route('faq/index')->with('Success', 'FAQ Added Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'something went wrong: ' . $e->getMessage())->withInput();
        }
    }


    public function faqUpdate(Request $request, $id)
    {
        try {
            DB::table('table_faqs')->where('id', $id)->update([
                'question' => $request->question,
                'answer' => $request->answer,
                'updated_at' => now()
            ]);
            return redirect()->route('faq/index')->with('Success', 'FAQ Updated Successfully!');
        } catch (\Exception $e) {
            return redirect()->route('faq/index')->with('error', 'something went wrong: ' . $e->getMessage())->withInput();
        }
    }

    public function faqDelete($id)
    {
        try {
            $faq = Faq::findOrFail($id);

            if (!$faq) {
                return redirect()->route('faq/index')->with('error', 'FAQ not found!');
            }
            $faq->delete();
            return redirect()->route('faq/index')->with('Success', 'FAQ Deleted Successfully!');
        } catch (\Exception $e) {
            return redirect()->route('faq/index')->with('error', 'something went wrong: ' . $e->getMessage())->withInput();
        }
    }
}
