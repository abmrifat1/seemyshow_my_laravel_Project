<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addOffer() {
        return view('admin.offer.add-offer');
    }

    public function saveOfferInfo(Request $request) {
        $offer = new Offer();

        $offer->offer_title = $request->offer_title;
        $offer->offer_description = $request->offer_description;
        $offer->publication_status = $request->publication_status;
        $offer->save();

        return redirect('/add-offer')->with('message', 'Offers info info save successfully');
    }
    public function manageOfferInfo() {
        $alloffers = Offer::all();
        return view('admin.offer.manage-offer', ['alloffers'=>$alloffers]);
    }
    public function unpublishedOfferInfo($id) {
        $offerById = Offer::find($id);
        $offerById->publication_status = 0;
        $offerById->save();
        return redirect('/manage-offer')->with('message', 'Offer info unpublished successfully');
    }
    public function publishedOfferInfo($id) {
        $offerById = Offer::find($id);
        $offerById->publication_status = 1;
        $offerById->save();
        return redirect('/manage-offer')->with('message', 'Offer info published successfully');
    }
    public function editOfferInfo($id) {

        $offerById = Offer::find($id);
        return view('admin.offer.edit-offer', ['offerById'=>$offerById]);
    }

    public function updateOfferInfo(Request $request) {

        $offerById = Offer::find($request->id);
        $offerById->offer_title = $request->offer_title;
        $offerById->offer_description = $request->offer_description;
        $offerById->publication_status = $request->publication_status;
        $offerById->save();

        return redirect('/manage-offer')->with('message', 'Offer info update successfully');
    }
    public function deleteOfferInfo($id) {
        $offerById = Offer::find($id);
        $offerById->delete();

        return redirect('/manage-offer')->with('message', 'Offer info delete successfully');
    }

}
