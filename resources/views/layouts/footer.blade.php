<script language="JavaScript">
            Webcam.set({
                width: 936,
                height: 550,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            
            Webcam.attach( '#my_camera' );
            
            function take_snapshot() {
                Webcam.snap(function (data_uri) {
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                });
            }

            function captureAndSubmit() {
                take_snapshot();
                document.getElementById('submitButton').click(); // Trigger form submission
            }

        </script>