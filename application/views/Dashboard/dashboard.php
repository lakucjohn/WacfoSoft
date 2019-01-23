<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:46 AM
 */
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">My Dashboard</li>
</ol>
<!-- Icon Cards-->
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $livelihood_group_total; ?> LIVELIHOOD GROUPS</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('groupings'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $total_children; ?> VULNERABLE CHILDREN</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('children%20list'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $total_field_support_visits; ?> FIELD SUPPORT VISITS</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('monitoring'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $total_trainings; ?> TRAININGS CONDUCTED</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('trainings'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $total_members; ?> PEOPLE INVOLVED IN LIVELIHOOD</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('membership'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $total_visits; ?> VISITATIONS</div>
                <br><br>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('visitations'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $total_savings_visits; ?> SAVINGS TRACKING VISITS</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('monitoring'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-30">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5"><?php echo $total_courses; ?> COURSES AVAILABLE</div>
            </div>
            <a class="card-footer text-white clearfix small z-1"
               href="<?php echo site_url('courses%20and%20topics'); ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
            </a>
        </div>
    </div>
</div>


<!--<div class="row">-->
<!--    <div class="col-lg-8">-->
<!---->
<!--        <!-- Card Columns Example Social Feed-->
<!--        <div class="mb-0 mt-4">-->
<!--            <i class="fa fa-newspaper-o"></i> News Feed</div>-->
<!--        <hr class="mt-2">-->
<!--        <div class="card">-->
<!--            <!-- Example Social Card-->
<!--            <div class="card mb-3">-->
<!--                <div class="card-body">-->
<!--                    <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>-->
<!--                    <p class="card-text small">Another day at the office...-->
<!--                        <a href="#">#workinghardorhardlyworking</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <hr class="my-0">-->
<!--                <div class="card-body py-2 small">-->
<!--                    <a class="mr-3 d-inline-block" href="#">-->
<!--                        <i class="fa fa-fw fa-thumbs-up"></i>Like</a>-->
<!--                    <a class="mr-3 d-inline-block" href="#">-->
<!--                        <i class="fa fa-fw fa-comment"></i>Comment</a>-->
<!--                    <a class="d-inline-block" href="#">-->
<!--                        <i class="fa fa-fw fa-share"></i>Share</a>-->
<!--                </div>-->
<!--                <hr class="my-0">-->
<!--                <div class="card-body small bg-faded">-->
<!--                    <div class="media">-->
<!--                        <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">-->
<!--                        <div class="media-body">-->
<!--                            <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!-->
<!--                            <ul class="list-inline mb-0">-->
<!--                                <li class="list-inline-item">-->
<!--                                    <a href="#">Like</a>-->
<!--                                </li>-->
<!--                                <li class="list-inline-item">·</li>-->
<!--                                <li class="list-inline-item">-->
<!--                                    <a href="#">Reply</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="card-footer small text-muted">Posted 46 mins ago</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- /Card Columns-->
<!--    </div>-->
<!--    <div class="col-lg-4">-->
<!---->
<!--        <!-- Example Notifications Card-->
<!--        <div class="card mb-3">-->
<!--            <div class="card-header">-->
<!--                <i class="fa fa-bell-o"></i> Alerts </div>-->
<!--            <div class="list-group list-group-flush small">-->
<!--                <a class="list-group-item list-group-item-action" href="#">-->
<!--                    <div class="media">-->
<!--                        <div class="media-body">-->
<!--                            <strong>David Miller</strong>posted a new article to-->
<!--                            <strong>David Miller Website</strong>.-->
<!--                            <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a class="list-group-item list-group-item-action" href="#">-->
<!--                    <div class="media">-->
<!--                        <div class="media-body">-->
<!--                            <strong>Samantha King</strong>sent you a new message!-->
<!--                            <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a class="list-group-item list-group-item-action" href="#">-->
<!--                    <div class="media">-->
<!--                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">-->
<!--                        <div class="media-body">-->
<!--                            <strong>Jeffery Wellings</strong>added a new photo to the album-->
<!--                            <strong>Beach</strong>.-->
<!--                            <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a class="list-group-item list-group-item-action" href="#">-->
<!--                    <div class="media">-->
<!--                        <div class="media-body">-->
<!--                            <i class="fa fa-code-fork"></i>-->
<!--                            <strong>Monica Dennis</strong>forked the-->
<!--                            <strong>startbootstrap-sb-admin</strong>repository on-->
<!--                            <strong>GitHub</strong>.-->
<!--                            <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a class="list-group-item list-group-item-action" href="#">View all activity...</a>-->
<!--            </div>-->
<!--            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->