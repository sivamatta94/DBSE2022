<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!doctype html>
    <html lang="en">
    <!-- custom styling -->
    <link rel="stylesheet" type="text/css" href="assets/css/CommentsPageStyle.css">
    <title>Comments Page</title>
</head>

<body>
    <div class="commentsSection">
        <header>
            <div class="logo">
                <h1 class="logo-text"><span>Team 02 </span> Blog</h1>
            </div>
            <nav>
                <i class="fa fa-bars menu-toggle"></i>
                <ul class="nav">
                    <li><b><a href="index.php">Home</a></b></li>
                    <li><b><a href="blog.php">Postings</a></b></li>
                    <li><b><a href="comments.php">Comments</a></b></li>
                </ul>
            </nav>
            <a class="cta" href="profile.php"><button>Profiles</button></a>
        </header>
        <div class="commetnstop">
            <h2> COMMENTS </h2>

            <h4>Blogging is not about publishing content but also
                two way communication and community building
                aspects behind it.
            </h4>
        </div>

    </div>
    <!--comments page tool-->
    <div class="comments_page">
        <!--sub pages for comments-->
        <div class="post_selection">
            <h3>Leave a comment on:</h3>
            <select class="form-control">
                <option>Select Post</option>
            </select>
            <h3 class="title">Title:</h3>
            <input class="form-control form-control-lg" type="text" placeholder="Title of the comment">
            <h3>Your Comment:</h3>
            <textarea rows="4" class="comment_box" cols="50" name="comment" form="usrform" placeholder="Enter text here in 150 words..." > </textarea>
            <p class>
                <button>
                    <type="button" class="btn btn-primary btn-lg btn3d">Submit
                </button>
            </p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="comments-area">
                    <h4>Comments on Post 1</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>John</h5>
                                    <p class="date">December 20, 2021 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>Martin</h5>
                                    <p class="date">December 22, 2021 at 10:12 pm </p>
                                    <p class="comment">
                                         (Reply of the above comment.)
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div id="divider-transparent"></div>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>Martin</h5>
                                    <p class="date">December 28, 2021at 4:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="comments-area">
                    <h4>Comments on Post 2</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>John</h5>
                                    <p class="date">December 20, 2021 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>Martin</h5>
                                    <p class="date">December 22, 2021 at 10:12 pm </p>
                                    <p class="comment">
                                    (Reply of the above comment.)
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div id="divider-transparent"></div>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <i class="fa fa-user" style="font-size:30px; width:30px;"></i>
                                </div>
                                <div class="desc">
                                    <h5>Martin</h5>
                                    <p class="date">December 28, 2021at 4:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>






    </div>


</body>

</html>