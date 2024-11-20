<?php
/**
 * skin file : /theme/THEME_NAME/skin/mypage/basic/favorite.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
.favorite-list {font-size:.9375rem}
.favorite-list .favorite-select {position:absolute;top:7px;right:7px;width:250px}
.favorite-list .fl-wrap {position:relative;border-top:2px solid #757575;border-bottom:1px solid #757575}
.favorite-list .fl-wrap > div:nth-last-child(1), .favorite-list .fl-wrap > div:nth-last-child(2) {border-bottom:0}
.favorite-list .fl-head {position:relative;display:table;width:100%;height:50px;border-bottom:1px solid #757575;background-color:#f2f2f2;font-weight:500}
.favorite-list .fl-head > div {position:relative}
.favorite-list .fl-head > div:before {content:"";position:absolute;top:50%;right:0;width:1px;height:13px;background-color:#cacaca;transform:translateY(-50%)}
.favorite-list .fl-head > div:last-child:before {display:none}
.favorite-list .fl-head .fl-item {display:table-cell;vertical-align:middle;width:120px;text-align:center}
.favorite-list .fl-head .fl-num {width:90px}
.favorite-list .fl-head .fl-num-short {width:80px}
.favorite-list .fl-head .fl-author {width:150px;padding:0 10}
.favorite-list .fl-head .fl-subj {display:table-cell;vertical-align:middle;text-align:center}
.favorite-list .fl-list {position:relative;display:table;table-layout:fixed;;width:100%;height:46px;border-bottom:1px solid #eaeaea;padding:8px 0}
.favorite-list .fl-list > div {position:relative}
.favorite-list .fl-list > div:before {content:"";position:absolute;top:50%;right:0;width:1px;height:13px;background-color:#dadada;transform:translateY(-50%)}
.favorite-list .fl-list > div:last-child:before {display:none}
.favorite-list .fl-list .fl-item {display:table-cell;vertical-align:middle;width:120px;text-align:center}
.favorite-list .fl-list .fl-num {width:90px}
.favorite-list .fl-list .fl-num-short {width:80px}
.favorite-list .fl-list .fl-author {width:150px;padding:0 10px;text-align:left}
.favorite-list .fl-list .fl-subj {display:table-cell;vertical-align:middle;font-weight:500}
.favorite-list .fl-list .fl-subj a {position:relative;padding:0 10px 0 0;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
.favorite-list .fl-list .fl-subj a:hover {color:#000;text-decoration:underline}
.favorite-list .fl-list .fl-subj .fl-img {position:absolute;top:0;left:0;width:50px;height:50px;overflow:hidden} 
.favorite-list .fl-list .fl-subj .fl-img img {background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position:50% 50%;height:100%}
.favorite-list .fl-list .fl-subj .fl-type {color:#959595;margin-right:3px}
.favorite-list .fl-list .fl-subj-img {padding-left:60px;height:50px}
.favorite-list .fl-list .fl-comment {color:#959595}
.favorite-list .fl-list .fl-comment strong {color:#f4511e;font-weight:400}
.favorite-list .fl-list .fl-photo {display:inline-block;margin-right:2px}
.favorite-list .fl-list .fl-photo img {width:17px;height:17px;border-radius:50%}
.favorite-list .fl-list .fl-photo .fl-user-icon {font-size:.9375rem}
.favorite-list .fl-mobile {position:relative;border-bottom:1px solid #eaeaea;padding:0 0 8px;color:#959595;display:none}
.favorite-list .fl-mobile .fl-photo {display:inline-block;margin-right:2px}
.favorite-list .fl-mobile .fl-photo img {width:17px;height:17px;border-radius:50%}
.favorite-list .fl-mobile .fl-photo .fl-user-icon {font-size:.9375rem}
.favorite-list .fl-mobile-right {float:right}
.favorite-list .fl-no-list {text-align:center;color:#959595;padding:70px 0}
.favorite-list .view-infinite-more .btn-e-xlg {position:relative;height:50px;line-height:50px;padding:0 120px;font-size:1.0625rem !important;border:1px solid #b5b5b5;background:#fff;color:#757575}
.favorite-list .view-infinite-more .btn-e-xlg i {position:absolute;top:10px;right:5px;font-size:30px;color:#fff;transition:all 0.2s ease-in-out}
.favorite-list .view-infinite-more .btn-e-xlg:hover {border:1px solid #959595;background:#f5f5f5;color:#000}
.favorite-list .view-infinite-more .btn-e-xlg:hover i {color:#b5b5b5}
#infscr-loading {text-align:center;z-index:100;position:absolute;left:50%;bottom:0;width:200px;margin-left:-100px;padding:8px 0;background:#000;opacity:0.8;color:#fff}
@media (max-width:991px) {
    .favorite-list .favorite-select {position:relative;top:inherit;right:inherit;width:250px;margin-top:10px}
    .favorite-list .favorite-select .eyoom-form label {margin-bottom:0}
    .favorite-list .fl-head {display:none}
    .favorite-list .fl-head-checkbox {display:table}
    .favorite-list .fl-head > div:before, .favorite-list .fl-list > div:before, .favorite-list .fl-head .fl-item, .favorite-list .fl-list .fl-item {display:none}
    .favorite-list .fl-head .fl-num-checkbox, .favorite-list .fl-list .fl-num-checkbox {display:table-cell;width:25px}
    .favorite-list .fl-head .fl-num-checkbox .fl-txt, .favorite-list .fl-list .fl-num-checkbox .fl-txt {visibility:visible;opacity:0}
    .favorite-list .fl-head .checkbox, .favorite-list .fl-list .checkbox {z-index:1}
    .favorite-list .fl-list {border-bottom:0}
    .favorite-list .fl-list .fl-subj a {padding:0}
    .favorite-list .fl-list .fl-subj .fl-img {left:inherit;right:0}
    .favorite-list .fl-list .fl-subj-img {padding-left:0;padding-right:60px}
    .favorite-list .fl-mobile {display:block}
}
</style>
<?php if ($side_layout['use'] == 'yes') { ?>
<style>
@media (max-width:1199px) {
    .favorite-list .favorite-select {position:relative;top:inherit;right:inherit;width:250px;margin-top:10px}
    .favorite-list .favorite-select .eyoom-form label {margin-bottom:0}
    .favorite-list .fl-head {display:none}
    .favorite-list .fl-head-checkbox {display:table}
    .favorite-list .fl-head > div:before, .favorite-list .fl-list > div:before, .favorite-list .fl-head .fl-item, .favorite-list .fl-list .fl-item {display:none}
    .favorite-list .fl-head .fl-num-checkbox, .favorite-list .fl-list .fl-num-checkbox {display:table-cell;width:25px}
    .favorite-list .fl-head .fl-num-checkbox .fl-txt, .favorite-list .fl-list .fl-num-checkbox .fl-txt {visibility:visible;opacity:0}
    .favorite-list .fl-head .checkbox, .favorite-list .fl-list .checkbox {z-index:1}
    .favorite-list .fl-list {border-bottom:0}
    .favorite-list .fl-list .fl-subj a {padding:0}
    .favorite-list .fl-list .fl-subj .fl-img {left:inherit;right:0}
    .favorite-list .fl-list .fl-subj-img {padding-left:0;padding-right:60px}
    .favorite-list .fl-mobile {display:block}
}
</style>
<?php } ?>

<div class="favorite-list">
    <blockquote class="hero m-b-30">
        <p class="li-p"><i class="fas fa-exclamation-circle li-p-fa"></i> 관심게시판으로 설정한 게시판의 모든 글들을 모아 봅니다.</p>
        <?php if (is_array($bo_possible)) { ?>
        <div class="favorite-select">
            <form name="fmypage" method="get" class="eyoom-form">
            <input type="hidden" name="t" value="favorite">
            <label class="select">
                <select name="bo_table" onchange="this.form.submit();">
                    <option value=''>관심게시판 전체</option>
                    <?php foreach ($bo_possible as $_bo_table => $bo_info) { ?>
                    <option value="<?php echo $_bo_table; ?>" <?php echo $_bo_table == $_GET['bo_table'] ? 'selected': ''; ?>><?php echo $bo_info['bo_name']; ?></option>
                    <?php } ?>
                </select><i></i>
            </label>
            </form>
        </div>
        <?php } ?>
    </blockquote>

    <div class="fl-wrap">
        <div class="fl-head">
            <div class="fl-subj">제목 / 이미지</div>
            <div class="fl-item fl-author">글쓴이</div>
            <div class="fl-item">게시판</div>
            <div class="fl-item">날짜</div>
            <div class="fl-item fl-num">조회</div>
        </div>
        <?php if (isset($list) && is_array($list)) { ?>
        <?php foreach ($list as $key => $li) { ?>
        <div class="fl-list-wrap">
            <div class="fl-list">
                <?php if ($li['wr_id'] == $li['wr_parent']) { ?>
                <div class="fl-subj <?php if ($li['wr_image']) { ?>fl-subj-img<?php } ?>">
                    <?php if ($li['wr_image']) { ?>
                    <div class="fl-img">
                        <img src="<?php echo $li['wr_image']; ?>" alt="">
                    </div>
                    <?php } ?>
                    <a href="<?php echo $li['href']; ?>" <?php if ($li['secret']) { ?>onclick="return false;"<?php } else if (!G5_IS_MOBILE) { ?>onclick="favorite_modal(this.href); return false;"<?php } else { ?>target="_blank"<?php } ?>>
                        <span class="subj"><?php echo get_text($li['wr_subject']); ?></span>
                        <?php if ($li['wr_comment']) { ?>
                        <span class="sound_only">댓글</span><span class="fl-comment m-l-5"><strong><i class="far fa-comment-dots"></i> <?php echo number_format($li['wr_comment']); ?></strong></span><span class="sound_only">개</span>
                        <?php } ?>
                    </a>
                </div>
                <?php } else { ?>
                <div class="fl-subj">
                    <a href="<?php echo $li['href']; ?>" <?php if ($li['secret']) { ?>onclick="return false;"<?php } else if (!G5_IS_MOBILE) { ?>onclick="favorite_modal(this.href); return false;"<?php } else { ?>target="_blank"<?php } ?>>
                        <span class="fl-type">[댓글]</span>
                        <span class="subj text-gray"><?php echo conv_subject($li['wr_content'],100,'…'); ?></span>
                    </a>
                </div>
                <?php } ?>
                <div class="fl-item fl-author">
                    <span class="fl-name-in"><?php echo eb_nameview($li['mb_id'], $li['wr_name'], $li['wr_email']); ?></span>
                </div>
                <div class="fl-item text-gray">
                    <?php echo $li['bo_info']['bo_name']; ?>
                </div>
                <div class="fl-item">
                    <?php echo $eb->date_time('Y-m-d',$li['datetime']); ?>
                </div>
                <div class="fl-item fl-num text-gray">
                    <?php if($li['wr_hit'] == 0) { ?>
                    -
                    <?php } else { ?>
                    <?php echo number_format($li['wr_hit']); ?>
                    <?php } ?>
                </div>
            </div>
            <div class="fl-mobile"><?php /* 991px 이하에서만 보임 */ ?>
                <span class="m-r-5">
                    <span class="fl-name-in"><?php echo eb_nameview($li['mb_id'], $li['wr_name'], $li['wr_email']); ?></span>
                </span>
                <span class="m-r-5">
                    [<?php echo $li['bo_info']['bo_name']; ?>]
                </span>
                <div class="fl-mobile-right">
                    <span class="m-l-5"><i class="far fa-clock"></i> <?php echo $eb->date_time('Y-m-d',$li['datetime']); ?></span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php if (count((array)$list) == 0) { ?>
            <div class="fl-no-list">
            <i class="fas fa-exclamation-circle"></i> 관심게시판에 등록된 글이 없습니다.<br><a href="<?php echo G5_URL; ?>/mypage/config.php#favorite">[환경설정]</a>에서 관심게시판을 설정하였는지 체크해 보세요.
        </div>
        <?php } ?>
    </div>
    <?php if (count((array)$list) > 0) { ?>
    <div id="infinite_pagination">
        <a class="next" href="<?php echo G5_URL; ?>/mypage/?t=favorite<?php echo $qstr;?>&amp;page=<?php echo ($page+1); ?>"></a>
    </div>
    <div class="view-infinite-more text-center m-t-30">
        <a id="my-favorite-more" href="#" class="btn btn-e-xlg">더 보기<i class="far fa-arrow-alt-circle-down"></i></a>
    </div>
    <?php } ?>
</div>

<?php /* 관심게시판 상세보기 모달 시작 */ ?>
<div class="modal fade favorite-iframe-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="favorite-iframe" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<?php /* 관심게시판 상세보기 모달 끝 */ ?>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/infinite-scroll/jquery.infinitescroll.min.js"></script>
<script>
function favorite_modal(href) {
    $('.favorite-iframe-modal').modal('show').on('hidden.bs.modal', function () {
        $("#favorite-iframe").attr("src", "");
        $('html').css({overflow: ''});
    });
    $('.favorite-iframe-modal').modal('show').on('shown.bs.modal', function () {
        $("#favorite-iframe").attr("src", href);
        $('#favorite-iframe').height(parseInt($(window).height() * 0.85));
        $('html').css({overflow: 'hidden'});
    });
    return false;
}

$(function(){
    var $container = $('.fl-wrap');
    $container.infinitescroll({
        navSelector  : "#infinite_pagination",
        nextSelector : "#infinite_pagination .next",
        itemSelector : ".fl-list-wrap",
        loading: {
            finishedMsg: 'END',
            img: '<?php echo EYOOM_THEME_URL; ?>/image/loading.gif'
        }
    },
    function( newElements ) {
        var $newElems = $( newElements ).css({ opacity: 0 });
        $newElems.imagesLoaded(function(){
            $newElems.animate({ opacity: 1 });
        });
    });
    $(window).unbind('.infscr');
    $('#my-favorite-more').click(function(){
        $container.infinitescroll('retrieve');
        $('#infinite_pagination').show();
        return false;
    });
});
</script>