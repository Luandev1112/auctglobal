<?php	$loggedInUser = Auth::user();
					$unread_notifications_count = $loggedInUser->unreadNotifications()->count();
					$unread_notifications = $loggedInUser->unreadNotifications;
					  // dd($unread_notifications[0]->data['title']);

			?>
			
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o f-bell"></i>
						@if($unread_notifications_count)
						<span class="count-mt active">{{$unread_notifications_count}}</span> 
						@endif
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-notif notification-dropdown" aria-labelledby="dd-notification">
					<div class="dropdown-menu-notif-list" id="latestUsers">
						@if($unread_notifications_count)
					@foreach($unread_notifications as $notification)
					<?php 
							$title = $notification->data['title'];
							$url = $notification->data['url'];
							// $description = setDescriptionLimit($notification->data['description']);
							$single_notification_url = URL_USER_NOTIFICATIONS_VIEW.$notification->id;
					 ?>
							<div class="dropdown-menu-notif-item dropdown-list ">
								
								 <a href="{{$single_notification_url}}" class="note-menu">
									<h4>{{$title}}</h4>
									
									<p>{{$notification->updated_at->diffForHumans()}}</p>
								</a>
							</div>
					@endforeach
						</div>

						<div class="dropdown-menu-notif-more">
							<a href="{{URL_USER_NOTIFICATIONS}}">{{ getPhrase('see_all') }}</a>
						</div>
						@else
						<div class="dropdown-menu-notif-list" >
							<div class="dropdown-menu-notif-item dropdown-list"><span class="no-notification-text">No Notifications available</span>
							</div>
						</div>
						@endif

					</div>
				</li>