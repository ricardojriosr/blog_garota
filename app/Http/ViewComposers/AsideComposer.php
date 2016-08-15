<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 31-07-2016
 * Time: 07:08 PM
 */

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;
use App\Tag;

class AsideComposer {

    public function compose(View $view)
    {
        $categories = Category::orderBy('name','ASC')->get();
        $tags = Tag::orderBy('name','ASC')->get();
        $view
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

}

?>

