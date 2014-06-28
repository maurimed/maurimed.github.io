<?php
$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <div class="page-nav row">
        <div class="row">
            <?php echo getPrevious($paginator->getCurrentPage(), $paginator->getUrl( $paginator->getCurrentPage()-1 ) ) ?>

            <div class="col-sm-4 col-xs-6">
                <div class="pages text-center">
                    <?php echo $presenter->getPageRange(1, $paginator->getLastPage() ); ?>
                </div>
            </div>



            <?php echo getNext($paginator->getCurrentPage(), $paginator->getLastPage(), $paginator->getUrl( $paginator->getCurrentPage()+1 ) )  ?>
        </div>
    </div>
<?php endif; ?>

<?php
function getPrevious($currentPage, $url)
{
    if ($currentPage <= 1)
//        return '<li class="previous disabled"><span class="icon-chevron-left"></span></li>';
       return '<div class="col-sm-4 text-left hidden-xs"> <a class="button solid blue md disabled"><div class="over"><i class="fa fa-chevron-left"></i>PREV</div></a> </div> <div class="col-xs-3 text-left visible-xs"> <a class="button solid blue md disabled"><div class="over"><i class="fa fa-chevron-left"></i></div></a> </div>';
    else
        // return '<li class="previous"><a class="icon-chevron-left" href="'.$url.'"></a></li>';
       return '<div class="col-sm-4 text-left hidden-xs"> <a href="'.$url.'"  class="button solid blue md"><div class="over"><i class="fa fa-chevron-left"></i>PREV</div></a> </div> <div class="col-xs-3 text-left visible-xs"> <a href="'.$url.'" class="button solid blue md"><div class="over"><i class="fa fa-chevron-left"></i></div></a> </div>';
}

function getNext($currentPage, $lastPage, $url)
{
    if ($currentPage >= $lastPage)
//        return '<li class="next disabled"><span class="icon-chevron-right"></span></li>';
        return '<div class="col-sm-4 text-right hidden-xs"> <a class="button solid blue md disabled"><div class="over"> NEXT<i class="fa fa-chevron-right"></i></div></a> </div> <div class="col-xs-3 text-right visible-xs"> <a class="button solid blue md disabled"><div class="over"><i class="fa fa-chevron-right"></i></div></a> </div>';
    else
        // return '<li class="next"><a class="icon-chevron-right" href="'.$url.'"></a></li>';
        return '<div class="col-sm-4 text-right hidden-xs"> <a  href="'.$url.'" class="button solid blue md"><div class="over"> NEXT<i class="fa fa-chevron-right"></i></div></a> </div> <div class="col-xs-3 text-right visible-xs"> <a  href="'.$url.'" class="button solid blue md"><div class="over"><i class="fa fa-chevron-right"></i></div></a> </div>';
}
?>