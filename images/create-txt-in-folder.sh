#!/bin/bash

# Function to process each directory
process_directory() {
    local directory=$1  # the directory to process
    pushd "$directory" > /dev/null  # go into the directory

    # Create a text file named after the directory
    local dir_name=$(basename "$directory")
    touch "${dir_name}.txt"

    popd > /dev/null  # go back to the previous directory
}

# Export the function so it can be used by find in a new shell
export -f process_directory

# Use find to run the process_directory function on each directory
find . -type d -exec bash -c 'process_directory "$0"' {} \;
