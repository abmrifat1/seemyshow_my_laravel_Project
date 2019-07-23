<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addFaq(){
        return view('admin.faq.add-faq');
    }


    public function saveFaqInfo(Request $request) {
        $faq = new Faq();

        $faq->name = $request->name;
        $faq->description = $request->description;
        $faq->publication_status = $request->publication_status;
        $faq->save();

        return redirect('/add-faq')->with('message', 'FAQ info save successfully');
    }
    public function manageFaqInfo() {
        $allFaqs = Faq::all();
        return view('admin.faq.manage-faq', ['allFaqs'=>$allFaqs]);
    }
    public function unpublishedFaqInfo($id) {
        $faqById = Faq::find($id);
        $faqById->publication_status = 0;
        $faqById->save();
        return redirect('/manage-faq')->with('message', 'FAQ info unpublished successfully');
    }
    public function publishedFaqInfo($id) {
        $faqById = Faq::find($id);
        $faqById->publication_status = 1;
        $faqById->save();
        return redirect('/manage-faq')->with('message', 'FAQ info published successfully');
    }
    public function editFaqInfo($id) {
        $faqById = Faq::find($id);
        return view('admin.faq.edit-faq', ['faqById'=>$faqById]);
    }

    public function updateFaqInfo(Request $request) {

        $faqById = Faq::find($request->id);
        $faqById->name = $request->name;
        $faqById->description = $request->description;
        $faqById->publication_status = $request->publication_status;
        $faqById->save();

        return redirect('/manage-faq')->with('message', 'Faq info update successfully');
    }
    public function deleteFaqInfo($id) {
        $faqById = Faq::find($id);
        $faqById->delete();

        return redirect('/manage-faq')->with('message', 'Faq info delete successfully');
    }
}
