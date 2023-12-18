<?php
// Paths to your input images and the output video
$inputImage1 = 'D:\\xampp\\htdocs\\ffmpeg\\ffmpeg\\bin\\1.png';
$inputImage2 = 'D:\\xampp\\htdocs\\ffmpeg\\ffmpeg\\bin\\2.png';
$outputVideo = 'D:\\xampp\\htdocs\\ffmpeg\\ffmpeg\\bin\\output.mp4';

// Duration for each image in seconds
$imageDuration = 5;

// Build the ffmpeg command
echo $ffmpegCommand = "ffmpeg -loop 1 -t $imageDuration -i \"$inputImage1\" -loop 1 -t $imageDuration -i \"$inputImage2\" -filter_complex \"[0:v]fps=25[v0];[1:v]fps=25[v1];[v0][v1]concat=n=2:v=1[outv]\" -map \"[outv]\" -c:v libx264 -t " . (2 * $imageDuration) . " \"$outputVideo\"";

// Execute the ffmpeg command
shell_exec($ffmpegCommand);

echo 'Video created successfully.';
?>

<?php

die;

// Paths to your input images and the output video
$inputImage1 = 'D:\xampp\htdocs\ffmpeg\ffmpeg\bin\1.png';
$inputImage2 = 'D:\xampp\htdocs\ffmpeg\ffmpeg\bin\2.jpg';
$outputVideo = 'D:\xampp\htdocs\ffmpeg\ffmpeg\bin\output.mp4';

// Duration for each image in seconds
$imageDuration = 5;

// Build the ffmpeg command

//echo $ffmpegCommand = "ffmpeg -loop 1 -t $imageDuration -i \"$inputImage1\" -loop 1 -t $imageDuration -i \"$inputImage2\" -filter_complex \"[0:v][1:v]concat=n=2:v=1[outv]\" -map \"[outv]\" \"$outputVideo\"";



echo $ffmpegCommand = "ffmpeg -loop 1 -t $imageDuration -i \"$inputImage1\" -c:v libx264 -t $imageDuration \"$outputVideo\"";



// Execute the ffmpeg command
shell_exec($ffmpegCommand);

 'Video created successfully.';
?>
