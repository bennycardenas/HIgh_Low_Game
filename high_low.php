<!-- 

The specs for the game are:
game picks a random number between 1 and 100.
prompts user to guess the number
if user's guess is less than the number, it outputs "HIGHER"
if user's guess is more than the number, it outputs "LOWER"
if a user guesses the number, the game should declare "GOOD GUESS!"

Hints:

Using conditionals and loops here is important
Random numbers can be made with the internal rand() function
If user is right, tell them they won
While they are wrong, give them hints and keep asking
Use exit(0) to end the game
If you get stuck in game, ctrl-c will exit. -->

<?php 

// $answer = rand(1,100);

do {
	$random = rand($argv[1], $argv[2]);
	var_dump($random);
	
	do {

		fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2] ");
		$guess = trim(fgets(STDIN));
	
		if(!is_numeric($guess)){
			fwrite(STDOUT, "$guess is not a number - please enter a number from $argv[1] to $argv[2]" );
			} elseif ($guess < $random){
				fwrite (STDOUT, "$guess is wrong - try HIGHER... ");
			} elseif ($guess > $random){
				fwrite(STDOUT, " $guess is wrong - try LOWER... ");
			} else {
				fwrite(STDOUT, "You Got It! - The right number is $random. ");
				fwrite(STDOUT, "Enter 'p' to play again. \n Enter any other character to exit. ");
				$answer = trim(fgets(STDIN));
			}
		
		} while ($guess != $random);

} while ($answer == "p");

 


 



