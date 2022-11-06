<?php
$john_score=90;
$sam_score=90;
// if($john_score>$sam_score){
//     echo "John is better.";
// }elseif($john_score === $sam_score){
//     echo "John an Sam are equal.";
// }else{
//     echo "Sam is better.";
// }

// if($john_score > $sam_score):
//     echo "John is better.";
// elseif($john_score === $sam_score):
//     echo "John an Sam are equal.";
// else:
//     echo "Sam is better.";
// endif;
?>
<?php if($john_score>$sam_score): ?>
    John is better.
<?php elseif($john_score === $sam_score): ?>
    John an Sam are equal.
<?php else: ?>
    Sam is better.
<?php endif; //if end ?>