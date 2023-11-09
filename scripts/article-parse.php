<?php
        // Read the content of the article file
        $article_content = file_get_contents('articles/article-01.php');

        // Use preg_split to split the content into words
        $word_array = preg_split('/\s+/', $article_content);

        // Take the first 174 words for the first column
        $first_part_word_count = 214;
        $first_part = implode(' ', array_slice($word_array, 0, $first_part_word_count));

        // Take the remaining words for the second column
        $second_part = implode(' ', array_slice($word_array, $first_part_word_count));


        // Read the content of the article file
        $article_content2 = file_get_contents('articles/article-02.php');

        // Use preg_split to split the content into words
        $word_array2 = preg_split('/\s+/', $article_content2);

        // Take the first 174 words for the first column
        $first_part_word_count2 = 199;
        $first_part2 = implode(' ', array_slice($word_array2, 0, $first_part_word_count2));

        // Take the remaining words for the second column
        $second_part2 = implode(' ', array_slice($word_array2, $first_part_word_count2));
?>