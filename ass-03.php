<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input number of data: ");
    fscanf(STDIN, "%d", $n);

    $datas = [];
    for($i = 0; $i < $n; $i++) {
        printf("Input score %2d: ", $i + 1);
        fscanf(STDIN, "%f", $datas[]);
    }
    printf("\n");

    // You can use either count($datas) or $n but I perfer count($datas).
    if(count($datas) > 0) {
        $total = 0;
        foreach($datas as $data) $total += $data;
        $avg = $total / count($datas);

        printf("The average score for ");
        $delim = "";
        foreach($datas as $i => $data) {
            printf("%s%.2f", $delim, $data);
            $delim = ", ";
            if($i == $n - 2) $delim = " and ";
        }
        printf(" = %.2f\n", $avg);
    } else {
        printf("No data!!!\n");
    }
