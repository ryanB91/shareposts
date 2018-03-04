<?php
//Simple plage redirect
function redirect($page){
	header('location: ' . URLROOT . '/' .$page);
}