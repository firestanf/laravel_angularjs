<div class="col-lg-6" ng-controller="todo_finctrl">
    <div class="panel panel-danger">
        <div class="panel-heading" style="overflow: hidden;">
        <p class="panel-title">Finished</p>
        <p class="chip"><% total_task %></p>
        </div>
            
            <ul class="panel-body progress-body">
                <li class="progress-entity " ng-class="{finishedbottom:$index != total_finishedtask}" ng-repeat="data in list_data">
                <p class="progress-text ">
                   <% data.des %></p>
                <button class="btn btn-danger  progress-button"  style="float:right;" ng-click="finish_progress()">Finished</button>
                <button class="btn btn-primary  progress-button"  style="float:right;" ng-click="return_progress()">On-Progress</button>
                </li>
<finished></finished>
                
            </ul>
        

    </div>
</div>