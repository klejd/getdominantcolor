First example  includes "color.inc.php ,example.php" 
INTRODUCTION
color.inc.php -- > This class can be used to get the most common colors in an image .it needs one parameter:$image which is the filename of the image you want to process.
Returns the colors of the image in an array, ordered in descending order, where the keys are the colors, and the values are the count of the color.
The file name of the image can be( jpg,gif or png)
Analysis of  requirements
1-Resize the image  we only need the most significant colors
2-We need nearest neighbour resizing algorithm because it dosnt  alter the colors
3-Round the colors to reduce  the  number of colors, to have no duplicate colors
Example 2  "index.php"
1- Put historgram option
2- Store total number of pixels
3 -Get the rgb value for current pixel
4-Add the point to the histogram
5-find the maximum in the histogram in order to display a normated graph
