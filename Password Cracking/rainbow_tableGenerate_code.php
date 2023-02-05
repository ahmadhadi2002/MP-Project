<?php
// Define the input folder path
$inputFolderPath = '../Password Cracking/dictattack_files/';

// Define the output folder path
$outputFolderPath = '../Password Cracking/rainbow_files/';

// Get a list of all the files in the input folder
$files = scandir($inputFolderPath);

// Iterate through each file
foreach ($files as $file) {
    // Check if the file is a .txt file
    if (pathinfo($file, PATHINFO_EXTENSION) == 'txt') {
        // Open the file for reading
        $inputFile = fopen($inputFolderPath . $file, "r");
        
        // Create a random unique name for the output file
        $outputFileName = uniqid() . '.txt';

        // Open the output file
        $outputFile = fopen($outputFolderPath . $outputFileName, "w");

        // Read each line of the input file
        while (($line = fgets($inputFile)) !== false) {
            // Hash the line in md5
            $hashedLine = md5($line);
            $preparedLine = $hashedLine."=>".$line;
            // Write the original value and its hashed value to the output file
            fwrite($outputFile,$preparedLine);
        }

        // Close the input file
        fclose($inputFile);

        // Close the output file
        fclose($outputFile);
    }
}