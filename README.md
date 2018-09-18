# Video Streaming 
live video streaming project, Stream data from raspberrypi goes to Amazon Kinesis Video Stream. Provides real-time viewing using Video.js and HLS

## Connection of aws-kinesis-video-stream and raspberrypi
* ### Troubleshooting : 
>There is an error when I build kinesis_video_gstreamer_sample_app.cpp.
>~~~ 
>cmake: symbol lookup error: libicui18n 
>~~~
>Install cmake :
>~~~
>$ sudo apt-get install cmake
>~~~
><br />
>
>There is an error when I run kinesis_video_gstreamer_sample_app.
>~~~
>./kinesis_video_gstreamer_sample_app: error while loading shared libraries: liblog4cplus-1.2.so.5: cannot open shared object >file: No such file or directory
>~~~
>I have fixed this error using library path change.
>~~~
>$export LD_LIBRARY_PATH=/home/pi/amazon-kinesis-video-streams-producer-sdk-cpp/kinesis-video-native-build//downloads/local/lib:$LD_LIBRARY_PATH
>~~~
<br />

## HLS Streaming
developing...
