<?php
/* 
* Author : Bayu p
* github : https://github.com/bayupriyambada
* Version : 1
*/
namespace bayup\response;

class ResponseJson{
  
  /**
   * It returns a JSON response with a code, message, and data.
   * 
   * @param code The HTTP status code you want to return.
   * @param message The message you want to display to the user.
   * @param data The data you want to return.
   * 
   * @return A JSON response.
   */
  public static function successJson($code = 200 , $message , $data){
    return response()->json([
      'code' => $code,
      'message' => $message,
      'data' => $data
    ]);
  }
 /**
  * It returns a JSON response with a code and message.
  * 
  * @param code The HTTP status code you want to return.
  * @param message The message you want to display to the user.
  * 
  * @return A JSON response with a code and message.
  */
  public static function errorJson($code , $message){
    return response()->json([
      'code' => $code,
      'message' => $message,
    ]);
  }
}
