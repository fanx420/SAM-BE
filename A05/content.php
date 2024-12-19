<?php
    $content1 = array();

    $contentQuery1 = 'SELECT * FROM islandContents WHERE islandOfPersonalityID = 1';
    $contentResult = executeQuery($contentQuery1);


    while ($contentRow = mysqli_fetch_assoc($contentResult)) {
        $content = new Contents($contentRow['islandOfPersonalityID'], $contentRow['image'], $contentRow['content'], $contentRow['color']);
        array_push($content1, $content);
    }

    $content2 = array();

    $contentQuery2 = 'SELECT * FROM islandContents WHERE islandOfPersonalityID = 2';
    $contentResult = executeQuery($contentQuery2);


    while ($contentRow = mysqli_fetch_assoc($contentResult)) {
        $content = new Contents($contentRow['islandOfPersonalityID'], $contentRow['image'], $contentRow['content'], $contentRow['color']);
        array_push($content2, $content);
    }

    $content3 = array();

    $contentQuery3 = 'SELECT * FROM islandContents WHERE islandOfPersonalityID = 3';
    $contentResult = executeQuery($contentQuery3);


    while ($contentRow = mysqli_fetch_assoc($contentResult)) {
        $content = new Contents($contentRow['islandOfPersonalityID'], $contentRow['image'], $contentRow['content'], $contentRow['color']);
        array_push($content3, $content);
    }

    $content4 = array();

    $contentQuery4 = 'SELECT * FROM islandContents WHERE islandOfPersonalityID = 4';
    $contentResult = executeQuery($contentQuery2);


    while ($contentRow = mysqli_fetch_assoc($contentResult)) {
        $content = new Contents($contentRow['islandOfPersonalityID'], $contentRow['image'], $contentRow['content'], $contentRow['color']);
        array_push($content4, $content);
    }

?>