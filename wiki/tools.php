<?php

    /*
     * 对二维数组排序
     *
     */
    public function array_sort($arr,$keys,$type='asc'){
        $keysvalue = $new_array = array();
        foreach ($arr as $k=>$v){
            $keysvalue[$k] = $v[$keys];
        }
        if($type == 'asc'){
            asort($keysvalue);
        }else{
            arsort($keysvalue);
        }
        reset($keysvalue);
        foreach ($keysvalue as $k=>$v){
            $new_array[] = $arr[$k];
        }
        return $new_array;
    }


//对二维数组排序
  public function test(){
        $test = array(
            '0' => array(
                'num' => 10,
                'name' => 'test'
            ),
            '1' => array(
                'num'  => 20,
                'name' => 'test2'
            ),
            '2' => array(
                'num'  => 1,
                'name' => 'asasa'
            ),
            '3' => array(
                'num' => 30,
                'name' => 'sdad'
            ),
            '21' => array(
                'num' => 2,
                'name' => 'sdad'
            )
        );
        $tmp = array();
        foreach($test as $k=>$v){
            $tmp[$k] = $v['num'];
        }
        array_multisort($test, SORT_DESC, SORT_STRING, $tmp, SORT_DESC);
        var_dump($test);
    }
    
    
 public function array_sort($arr,$keys,$type='asc'){
        $tmp = array();
        foreach($arr as $k=>$v){
            $tmp[$k] = $v[$keys];
        }
        if($type == "asc"){
            array_multisort($arr, SORT_ASC, SORT_STRING, $tmp, SORT_ASC);
        }else{
            array_multisort($arr, SORT_DESC, SORT_STRING, $tmp, SORT_DESC);
        }
        return $arr;
    }
    
    
    //csv操作
    public function csv_operation(){
        $ruby = array();
        include_once('application/config/ruby.php');


        $file = fopen('application/config/rubycsv.csv','r');
        while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
            $goods_list[] = $data;
        }

        echo $goods_list[1][0];

        fclose($file);
        $newparam = array();
        foreach($goods_list as $k=>$v){
            if($k==0){
                $newparam[0] = $v;
            }else{
//                if(strpos($ruby[30], $v[0])>0){
//                    $newparam[] = $v;
//                }
            }
        }
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment;filename=CSV数据.csv ");
        $str = '';
        foreach ($newparam as $row) {
            $str_arr = array();
            foreach ($row as $column) {
                $str_arr[] = '"' . str_replace('"', '""', $column) . '"';
            }
            $str.=implode(',', $str_arr) . PHP_EOL;
        }
        echo $str;
      //  var_dump($newparam);
    }
