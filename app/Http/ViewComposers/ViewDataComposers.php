<?php

namespace App\Http\ViewComposers;

use App\Models\Banner;
use App\Repositories\Banner\BannerRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;
use Illuminate\View\View;

class ViewDataComposers
{
    /**
     * The repository implementation.
     *
     */
    protected $category;
    protected  $banner;
    protected $comment;
    protected $order;
    /**
     * Create a new view  composer.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->category = $category;
//        $this->banner = $banner;
//        $this->comment = $comment;
//        $this->order = $order;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $banner = Banner::where('active',1)->get()->toArray();
        $local= (session('locale')!= null)?session('locale'):"vi";

        $view->with(
            [
                'banner' => $banner,
                'local' =>$local

            ]);

    }
}