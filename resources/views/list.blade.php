<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cfff</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    {{-- custom js --}}
    {{ Html::script('js/main.js') }}
    {{ Html::script('js/auth/login/directive.js')}}
    {{ Html::script('js/service/validate.service.js')}}

    {{-- custom css --}}
    {{ Html::style('css/development/list.css')}}
</head>
{{-- @include('Widget.Nav') --}}

<body ng-app="myApp" class="side-nav">

    <div class="modal">
        <div class="modal-content">
            <p class="title">Select Icon</p>
            <div class="icon-list-box">
                <div class="tr">
                    <div class="td">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>sign-out</p> 
                    </div>
                    <div class="td">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>sign-out</p> 
                    </div>
                    <div class="td">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>sign-out</p> 
                    </div>
                </div>
                <div class="tr">

                                <div class="td">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>

                </div>
                <div class="tr">

                                <div class="td">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            
                </div>
                <div class="tr">

                                <div class="td">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            
                </div>
                <div class="tr">

                                <div class="td">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                                            
                </div>
                <div class="tr">

                                <div class="td">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <p>sign-out</p> 
                                            </div>
                                            <div class="td">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                        <p>sign-out</p> 
                                            </div>
                </div>

                <div class="load-content">
                        <p>Loading....</p>
                </div>


            </div>
        </div>
    </div>



    <div class="content-body">

        <div class="content">
            <div class="title-body">
                <div>
                    <p class="title">Makan Malam Rumah</p>

                    <ul class="activity-body">
                        <li class="activity-entity">
                            <p class="Title">Current Task</p>
                            <p class="count">20</p>
                        </li>
                        <li class="activity-entity">
                            <p class="Title">Finished Task</p>
                            <p class="count">20</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="current-task">

                <p class="title">Current Task</p>
                <table class="table">
                    <thead>

                        <tr style="line-height:.7em">
                            <th scope="column" class="col-md-1">
                                <p class="thead-text position">Position</p>
                            </th>
                            <th scope="column" class="col-md-11">
                                <p class="thead-text">Task</p>
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr style="line-height:1.54em;">
                            <th scope="row" class="col-md-1" style="text-align:center;">1</th>
                            <td class="col-md-11">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda
                                aliquam voluptatibus doloribus nihil nobis repellat quaerat, est rem ratione voluptate
                                obcaecati necessitatibus reprehenderit, velit dolore delectus recusandae quidem odio
                                corporis!</td>
                        </tr>
                        <tr style="line-height:.8em;">
                            <th scope="row" class="col-md-1" style="text-align:center;">10</th>
                            <td class="col-md-11">Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="finished-task">

            </div>
        </div>
    </div>



    <div class="nav-side">

        <div class="logo-web">
            logo
            {{-- <p>Logo</p> --}}
        </div>

        <div class="buton-user">
            <img class="Imgonclick" src="https://yt3.ggpht.com/-FpoBOVwSiE0/AAAAAAAAAAI/AAAAAAAAAAA/Yf-SnwkfdQ4/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"
                alt="">

            {{-- <div class="">
                <div class="user-info">
                    <img src="https://yt3.ggpht.com/-FpoBOVwSiE0/AAAAAAAAAAI/AAAAAAAAAAA/Yf-SnwkfdQ4/s88-c-k-no-mo-rj-c0xffffff/photo.jpg">
                    <p>Gurpreet Lyons</p>
                </div>
                <div class="drop-entity">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </div>
            </div> --}}
            <div class="user-drop">
                <a class="dropdown-item" href="#">Setting</a>
                <a class="dropdown-item" href="#">logout</a>
            </div>

        </div>



        <div class="create-todo-body">
            <div class="data">
                <button class="Icon-Chooser">
                    <i class="fas fa-laptop"></i>
                </button>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <p class="Error-Text">Please Fill The Field</p>
            <button class="add-todo">ADD</button>
        </div>

        <ul class="todo-list">
            <li class="title">
                <p>My Todo List</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>

            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
            <li class="entity">
                <i class="fas fa-laptop"></i>
                <p>Makan Malam Rumah</p>
            </li>
        </ul>

    </div>




</body>

</html>
