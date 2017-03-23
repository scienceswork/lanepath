<div class="panel panel-default">
    <div class="panel-heading panel-white text-center">
        <h3 class="panel-title">
            留言板
        </h3>
    </div>
    <div class="panel-body">
        <form action="#" novalidate="" style="margin-bottom: 10px;">
            {{ csrf_field() }}
            <div class="form-group input-group no-margin">
                <textarea name="content" class="form-control xd-message" placeholder="给楼主留个脚印，说点什么..."></textarea>
                <span class="input-group-btn">
            <button type="submit" class="btn btn-success xd-message-btn">留言</button>
        </span>
            </div>
        </form>
    </div>
</div>