<?php

namespace App\Http\Controllers;

use App\News;
use Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function addNews() {
        return view('admin.news.add-news');
    }

    public function saveNewsInfo(Request $request){

        $newsImage = $request->file('news_image');
        $imageName1 = $newsImage->getClientOriginalName();
        $directory = 'images/news/news-image/';
        $imgUrl1 = $directory.$imageName1;
        Image::make($newsImage)->resize(135,160)->save($imgUrl1);

        $news=new News();
        $news->news_title = $request->news_title;
        $news->news_description = $request->news_description;
        $news->author_name = $request->author_name;
        $news->author_description = $request->author_description;
        $news->news_image = $imgUrl1;

        $authorImage = $request->file('author_image');
        $imageName2 = $authorImage->getClientOriginalName();
        $directory = 'images/news/author-image/';
        $imgUrl2 = $directory.$imageName2;
        Image::make($authorImage)->resize(1110,415)->save($imgUrl2);

        $news->author_image = $imgUrl2;
        $news->publication_status = $request->publication_status;

        $news->save();

        return redirect('/add-news')->with('message', 'News info save successfully');
    }

    public function allNews(){

        $allNews=News::where('publication_status',1)->get();
        return view('front.news.all-news',['allNews'=>$allNews]);
    }

    public function News_details($id){
       $news_details= News::where('id',$id)->first();

       $relatedNews=News::where('publication_status',1)
           ->orderBy('id','desc')
           ->take(3)
           ->get();

        return view('front.news.news-details',[
            'news_details'=>$news_details,
            'relatedNews'=>$relatedNews
        ]);
    }
    public function manageNewsInfo() {

        $allnews=News::all();
        return view('admin.news.manage-news', ['allnews'=>$allnews]);
    }
    public function unpublishNewsInfo($id){
        $newsById=News::find($id);
        $newsById->publication_status=0;
        $newsById->save();

        return redirect('/manage-news')->with('message','News Info unpublish successfully');
    }

    public function publishedNewsInfo($id){
        $newsById=News::find($id);
        $newsById->publication_status=1;
        $newsById->save();

        return redirect('/manage-news')->with('message','News Info publish Successfully');

    }
    public function editNewsInfo($id){
        $news=News::find($id);
        return view('admin.news.edit-news',[
            'news'=>$news,
        ]);
    }
    public function updateNewsInfo(Request $request){


        $author_image=$request->file('author_image');
        if($author_image){
            $news=News::find($request->id);
            unlink($news->author_image);

            $authorImage=$request->file('author_image');
            $imageName=$author_image->getClientOriginalName();
            $directory='images/news/author-image/';
            $imageUrl=$directory.$imageName;
            Image::make($authorImage)->resize(1110,415)->save($imageUrl);


            $news->news_title=$request->news_title;
            $news->news_description=$request->news_description;
            $news->author_name=$request->author_name;
            $news->author_description=$request->author_description;
            $news->author_image=$imageUrl;
            $news->publication_status=$request->publication_status;
            $news->save();

        }
        else{
            $news=News::find($request->id);

            $news->news_title=$request->news_title;
            $news->news_description=$request->news_description;
            $news->author_name=$request->author_name;
            $news->author_description=$request->author_description;
            $news->publication_status=$request->publication_status;
            $news->save();

        }

        return redirect('/manage-news')->with('message','News Info Update Successfully');
    }
    public function deleteNewsInfo($id){
        $newsById=News::find($id);
        unlink($newsById->news_image);
        unlink($newsById->author_image);
        $newsById->delete();
        return redirect('/manage-news')->with('message','news Info Delete Successfully');
    }

}
