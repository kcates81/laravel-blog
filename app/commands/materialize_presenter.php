<?php  
class MaterializePresenter extends Illuminate\Pagination\Presenter {

    public function getActivePageWrapper($text)
    { 
        return '<li class="active"><a href="">'.$text.'</a></li>';
    }

    public function getDisabledTextWrapper($text)
    {
        return '<li class="disabled"><a href="">'.$text.'</a></li>';
    }

    public function getPageLinkWrapper($url, $page, $rel = null)
    {
        return '<li class="waves-effect"><a href="'.$url.'">'.$page.'</a></li>';
    }

}
?>