<div class="col-lg-6" ng-controller="todo_onprogressctrl">
    <div class="panel panel-primary ">
        <div class="panel-heading"  style="overflow: hidden;">
            <p class="panel-title"> Current Task </p>
            <p class="chip"><% total_task %></p>
        </div>


            <ul class="panel-body progress-body">
                    <li class="progress-entity " ng-class="{finishedbottom:$index != total_task-1}" ng-repeat="data in list_data" ng-if="total_task != 0">
                    <p class="progress-text"><% data.des %></p>
                    <button class="btn btn-warning  progress-button" data-position= '<%$index%>' ng-click="finish_progress($event)" style="float:right;">Finished</button>
                    </li>
                    <li class="progress-entity " ng-if="total_task < 1">
                        <% condition%>
                 </li>
            </ul>

    </div>
</div>




