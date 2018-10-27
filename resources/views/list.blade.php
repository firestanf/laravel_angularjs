<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Todo list project</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /*hover list*/
        .list-group-item:hover {
            background-color: silver;
        }

        /* onclick change color */
        .finished {
            color: red;
        }

    h1,h2,h3,h4,P
    {
        margin:0;
        Padding:0;
    }

    /*Post User_interFace*/
    .Posts_Title
    {
        font-size:1em;
    }
    .Posts_Update
    {
        
    }
    </style>

</head>

<body>

    @include('Widget.Add')
    @include('Widget.Edit')

    {{csrf_field()}}
    <div class="container">
        <!--??-->
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>My Posts
                            <a href="#" class="pull-right">
                                <i class="fas fa-plus"></i></a>
                        </h3>
                    </div>
                    <div class="panel-body">


                        <ul class="list-group">
                            @forelse ($Posts_data as $posts)
                                <li class="list-group-item OurItem">
                                    <p class="Posts_Title">{{$posts->content}}<p>
                                     <p><i class="fas fa-check-square pull-right"></i></p>
                                    <p class="Posts_Update">{{$posts->updated_at}}</p>
                                </li>
                            @empty
                            <p>No Posts</p>
                            @endforelse
                        </ul>

                    </div>
                </div>



            </div>
        </div>

    </div>


</body>



<script>
    $(document).ready(function () {

        //Adding Todo
        $('#Addd').click(() => {
            let Adding_value = $("#AddModal").find(".modal-body").find("#add-item").val();
            let getUrl = window.location;
            let baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

            request("http://localhost/LAZY/practice/PHP/Laravel/angular-laravel-todo/public/API/V1/ADD","POST",{
                    "Todo_item": Adding_value,
                    "_token": $('input[name=_token]').val()
                })
            .done(function (msg) {
                console.log(msg);
            })
            .fail(function (jqXHR, textStatus) {
                console.log(JSON.stringify(jqXHR));
                console.log(textStatus);
            });

        });

        $('.fa-plus').click(() => {
            $('#AddModal').modal('toggle');
        });


        //Looping List
        $('.OurItem').each(function () {
            let List_item = $(this);


             //.Posts_Update

            List_item.dblclick((event) => {
                $('#EditModal').modal('show');

                $('#Edit-Item').val($(this).find(".Posts_Title").text());

                $('#close').click('on', () => {
                    console.log(this.lastChild);
                    $('#AddModal').modal('hide');
                }); 

            });

            //update The Database
            List_item.click((Ev) => {
                $(this).toggleClass("finished");
                if ($(this).children().hasClass("fa-square")) {
                    $(this).children().removeClass("fa-square").addClass("fa-check-square")
                } else {
                    // $(this).children().removeClass("fa-check-square").addClass("fa-square")
                }
                console.log(Ev.target.classList);
            });

        });
        
        
        let request=function(URL,METHOD,DATA)
        {
            return this.request = $.ajax({
                url: URL,
                method:METHOD,
                data:DATA,
                dataType: "html"
            });
        };



    });

</script>



</html>
