<?php

/* @var $this humhub\components\View */

\humhub\modules\activity\assets\ActivityAsset::register($this);

$this->registerJsConfig([
    'activity' => [
        'text' => [
            'activityEmpty' => Yii::t('ActivityModule.widgets_views_activityStream', 'There are no activities yet.')
        ]
    ]
]);

?>

<div class="panel panel-default panel-activities">
    <div class="panel-heading"><?= Yii::t('ActivityModule.widgets_views_activityStream', '<strong>Latest</strong> activities'); ?></div>
    <div id="activityStream" data-stream="<?= $streamUrl ?>">
        <ul id="activityContents" class="media-list activities" data-stream-content>
        </ul>
    </div>
</div>

<script type="text/javascript">

    // set niceScroll to activity list
    $("#activityContents").niceScroll({
        cursorwidth: "7",
        cursorborder: "",
        cursorcolor: "#555",
        cursoropacitymax: "0.2",
        railpadding: {top: 0, right: 3, left: 0, bottom: 0}
    });

    // update nicescroll object with new content height after ajax request
    $(document).ajaxComplete(function (event, xhr, settings) {
        $("#activityContents").getNiceScroll().resize();
    })

</script>


