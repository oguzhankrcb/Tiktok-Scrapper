<div>
    <div class="bg-light p-5 rounded">
        <h1>Tiktok User Scrapper</h1>
        <div style="padding-top: 30px;" class="row">
            <div class="col-6">
                <input placeholder="Enter valid username..." type="text" id="username" wire:model='username'>
                &nbsp;
                &nbsp;
                <button class="btn btn-lg btn-primary" wire:click='searchUser' role="button">Search User &raquo;</button>
            </div>
            <div class="col-6">
                @if ($searchCompleted)
                    <div class="row">
                        <div class="col-6">Follower Count : </div>
                        <div class="col-6">{{ $userInfo['followerCount'] }}</div>
                    </div>

                    <div class="row">
                        <div class="col-6">Following Count : </div>
                        <div class="col-6">{{ $userInfo['followingCount'] }}</div>
                    </div>

                    <div class="row">
                        <div class="col-6">Video Count : </div>
                        <div class="col-6">{{ $userInfo['videoCount'] }}</div>
                    </div>

                    <div class="row">
                        <div class="col-6">Like Count : </div>
                        <div class="col-6">{{ $userInfo['heartCount'] }}</div>
                    </div>

                    <div class="row">
                        <div class="col-6">Engagement Rate : </div>
                        <div class="col-6">{{ $engagementRate }}</div>
                    </div>
                @endif
            </div>
        </div>

    </div>

    <div wire:loading wire:target="searchUser">
        User Searching, Please Wait...
    </div>
</div>
