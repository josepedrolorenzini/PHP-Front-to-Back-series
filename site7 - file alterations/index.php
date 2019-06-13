<?php 
$path = '/dir1/myfile.php';
$file = 'file1.txt';

echo basename($path); # return filename

echo basename($path, '.php'); # without ext

echo dirname($path); # dir name

echo file_exists($file); # checks current dir, can be used for folder too

echo realpath($file); # absolute path

echo is_file($file); # checks if its a file 

echo is_writable($file); # check if writeable

echo is_readable($file); # check if writeable

echo filesize($file); 

mkdir('testing'); # create a directory

rmdir('testing'); # del if empty dir

copy($file, 'file2.txt'); # copy file and rename

rename('file2.txt', 'anotherfile.txt'); # rename

unlink('anotherfile.txt'); # delete a file

echo file_get_contents($file1); # write from file to string

echo file_put_contents($file, 'Good bye World'); # write string to file, overrides data

# append to file
    $current = file_get_contents($file);
    $current .= ' Gday fella!';
    file_put_contents($file, $current);
    echo file_get_contents($file);

# open file for reading 
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);

# open file for writing, creates file if it doesnt exist
    $handle = fopen('file2.txt', 'w');
    $txt = 'Please bring me some food';
    fwrite($handle, $txt);
    fclose($handle);

?>