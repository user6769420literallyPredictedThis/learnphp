<?php

// library

class Job {
    public function task(Logger $logger) {
        for($i=0;$i<10;$i++){
            //some work is done (video processing or wtv)
            $logger->log("Task $i was done!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {

    }
}

interface Logger {
    public function log($message);
}

// user code 

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

class  NothingLogger {
    public function log($message) {

    }
}

$job = new Job;
$logger = new FileLogger();
$job->task($logger);

?>