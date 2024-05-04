#!/bin/bash

# Get the current directory
IMAGES_DIR="$(pwd)"

# Echo current directory - optional, for verification
echo "Organizing images in directory: $IMAGES_DIR"

# Find all image files and process them
find "$IMAGES_DIR" -type f \( -iname "*.jpg" -o -iname "*.png" -o -iname "*.gif" -o -iname "*.jpeg" \) | while read image; do
    # Extract the base filename without extension
    base_name=$(basename "$image" | sed 's/\(.*\)\..*/\1/')
    
    # Create a directory named after the image file (without extension)
    mkdir -p "$IMAGES_DIR/$base_name"
    
    # Move the image to its new directory
    mv "$image" "$IMAGES_DIR/$base_name/"
done
