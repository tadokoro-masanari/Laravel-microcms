<?php

namespace App\Http\Controllers;

use App\Services\MicroCmsService;
use Illuminate\View\View;

class ArticleController extends Controller
{
    private MicroCmsService $microCms;

    public function __construct(MicroCmsService $microCms)
    {
        $this->microCms = $microCms;
    }

    /**
     * 記事一覧を取得
     * @return View
     */
    public function index(): View
    {
        $blogs = $this->microCms->getContents('blogs');

        return view('welcome', compact('blogs'));
    }

    public function detail($id): View
    {
        $blog = $this->microCms->getSingleContent('blogs', $id);

        return view('detail', compact('blog'));
    }
}
