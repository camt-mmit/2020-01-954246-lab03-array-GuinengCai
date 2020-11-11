<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    echo "Input the number of grades: ";
    fscanf(STDIN, "%d", $n);
    echo "Input grade data from max score to min score\n";
    $gradeTexts = [];
    $minScores = [];
    for($i = 0; $i < $n; $i++) {
        printf("%4d: Input grade data (grade min_score): ", $i+1);
        fscanf(STDIN, "%s %f", $gradeTexts[], $minScores[]);
    }
    
    $scores = [];
    $gradeFormat = "Grade is %s\n";
    for($i = 0; true; $i++) {
        printf("Input score %3d ('e' for end of data): ", $i + 1);
        fscanf(STDIN, "%s", $scoreText);
        if(strtolower($scoreText) == "e") break;
        
        $score = (double)$scoreText;
        $scores[] = $score;
        foreach($minScores as $index => $minScore) {
            if($score >= $minScore) {
                printf($gradeFormat, $gradeTexts[$index]);
                break;
            }
        }
    }
    
    printf("\n");
    if(count($scores) > 0) {
        echo "The summary for ";
        
        $delim = "";
        foreach($scores as $index => $score) {
            printf("%s%.2f", $delim, $score);
            $delim = ($index < count($scores) - 2)? ", " : " and ";
        }
        printf("\n");

        $total = 0;
        foreach($scores as $score) $total += $score;
        $avg = $total/count($scores);
        $total_var = 0;
        foreach($scores as $score) $total_var += (($score - $avg) ** 2);
        $var = $total_var/count($scores);

        printf("Average = %.2f\n", $avg);
        printf("Variance = %.2f\n", $var);
    } else {
        printf("No data!!!\n");
    }
    

