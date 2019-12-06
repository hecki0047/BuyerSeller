<!-- // -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <script type="text/javascript">
        // Enable pusher logging - don't include this in production
         Pusher.logToConsole = true;

        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: 'ap2',
            encrypted: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('Notify');

        var user_id = document.getElementById('user_id').value;

        // Bind a function to a Event (the full Laravel class)
        channel.bind('send-message'+user_id, function(data) {
            var notificationsWrapper   = $('.pusher_notification_'+data.notification_type);
            var notificationsCountElem = notificationsWrapper.find('i[data-count]');
            var notificationsCount     = parseInt(notificationsCountElem.data('count'));

            var allNotificationsWrapper   = $('#all_notification');
            var allNotificationsCountElem = allNotificationsWrapper.find('i[data-count]');
            var allNotificationsCount     = parseInt(allNotificationsCountElem.data('count'));

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.show();

            allNotificationsCount += 1;
            allNotificationsCountElem.attr('data-count', allNotificationsCount);
            allNotificationsWrapper.show();


        });
    </script>
    <!-- // -->