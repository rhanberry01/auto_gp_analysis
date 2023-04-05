<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auto_model_ extends CI_Model {



        public function trans_begin(){
            $this->db = $this->load->database('datacenter', TRUE);
            $this->db->trans_begin();
        }

        public function trans_status(){
            $this->db = $this->load->database('datacenter', TRUE);
            $res = $this->db->trans_status();
            return $res;
        }

        public function trans_rollback(){
            $this->db = $this->load->database('datacenter', TRUE);
            $this->Auto_model_->trans_rollback();;
        }

        public function trans_commit(){
            $this->db = $this->load->database('datacenter', TRUE);
            $this->db->trans_commit();
        }
     
        public function FetchAutoCosting($status = null){
          $this->db = $this->load->database('datacenter_100', TRUE);
          $sql = "SELECT * FROM NEWDATACENTER.dbo.AutoCosting where status = '".$status."'  ";
          $res = $this->db->query($sql);
          $res = $res->result();
          return $res;
  
       }
  

     public function FetchAutoPricing($status = null){
        $this->db = $this->load->database('datacenter_100', TRUE);
        $sql = "SELECT TOP 1000 * FROM NEWDATACENTER.dbo.AutoPricing where status = '".$status."' ";
        $res = $this->db->query($sql);
        $res = $res->result();
        return $res;

     }

      public function MultiQuery($sql){
        $this->db = $this->load->database('datacenter_100' , TRUE);
        $this->db->query($sql);
       $last_query = $this->db->last_query();
      
        return $last_query;

     }

     public function MultiQuery_133($sql){
      $this->db = $this->load->database('datacenter' , TRUE);
      $this->db->query($sql);
      $last_query = $this->db->last_query();
    
      return $last_query;
    }

      public function MultiQueryBranch($sql,$branch){
        $this->db = $this->load->database($branch , TRUE);
        $this->db->query($sql);
       $last_query = $this->db->last_query();
        return $last_query;

     }



     public function get_max_counter_by_category($branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT isnull(max(counter),0) as counter from ".$branch.".dbo.gp_analysis_header_by_category";
        $res = $this->db->query($sql);
        $res = $res->row();
        return $res->counter;

     }

    public function get_max_counter_by_category_daily($branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT isnull(max(counter),0) as counter from ".$branch.".dbo.gp_analysis_header_by_category_daily";
        $res = $this->db->query($sql);
        $res = $res->row();
        return $res->counter;

     }
     public function get_max_counter($branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT isnull(max(counter),0) as counter from ".$branch.".dbo.gp_analysis_header";
        $res = $this->db->query($sql);
        $res = $res->row();
        return $res->counter;
     }

     public function get_max_counter_daily($branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT isnull(max(counter),0) as counter from ".$branch.".dbo.gp_analysis_header_daily";
        $res = $this->db->query($sql);
        $res = $res->row();
        return $res->counter;
     }

     public function delete_details($branch,$details_tables,$check_data){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = " DELETE FROM  ".$branch.".dbo.".$details_tables." WHERE header_counter ='".$check_data."'";
        echo $sql.PHP_EOL;
        $res = $this->db->query($sql);

     }

     public function delete_sub_category($branch,$datetoday){
         $this->db = $this->load->database('datacenter', TRUE);
        $sql = " DELETE FROM ".$branch.".dbo.gp_analysis_sub_category_header WHERE date_ ='".$datetoday."'  ";
        echo $sql.PHP_EOL;
        $res = $this->db->query($sql);
     }


    public function delete_sub_category_daily($branch,$datetoday){
         $this->db = $this->load->database('datacenter', TRUE);
        $sql = " DELETE FROM ".$branch.".dbo.gp_analysis_sub_category_header_daily WHERE date_ ='".$datetoday."'  ";
        echo $sql.PHP_EOL;
        $res = $this->db->query($sql);
     }

     public function delete_header($branch,$details_tables,$check_data){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = " DELETE FROM  ".$branch.".dbo.".$details_tables." WHERE counter ='".$check_data."'  ";
        echo $sql.PHP_EOL;
        $res = $this->db->query($sql);

     }

     public function check_if_data_exist($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header where date_ ='".$datetoday."'  ";
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }else{
            return false;
        }
     }


    public function check_if_data_exist_daily($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header_daily where date_ ='".$datetoday."'  ";
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }else{
            return false;
        }
     }


     public function check_if_data_exist_category($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header_by_category where date_ ='".$datetoday."'  ";
        echo $sql;
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }
     }

     public function check_if_data_exist_category_daily($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header_by_category_daily where date_ ='".$datetoday."'  ";
        echo $sql;
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }
     }


     public function check_if_data_exist_sub_category($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header_by_category where date_ ='".$datetoday."'  ";
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }else{
            return false;
        }
     }


    public function check_if_data_exist_sub_category_daily($branch,$datetoday){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "SELECT counter from ".$branch.".dbo.gp_analysis_header_by_category_daily where date_ ='".$datetoday."'  ";
        $res = $this->db->query($sql);
        $res = $res->row();
        if($res){
            return $res->counter;
        }else{
            return false;
        }
     }

     public function get_discounts($branchin =null, $branchnin=null){
      $this->db = $this->load->database('datacenter', TRUE);

      $sql = "SELECT DiscountCode,Description,Amount,[Percent],Plus from  Discounts ";
      $res = $this->db->query($sql);
      $res = $res->result();
      return $res; 
    
    }
     public function get_branch($branchin =null, $branchnin=null){
       // $branchnin = "'LLM','CB2','SP2','BRG','CPR','CMT','CNV','SRV'";
        $this->db = $this->load->database('datacenter_100', TRUE);

         $sql = "SELECT remoteserverdatabasename,branchcode from  branches ";


        if($branchin != null){
            
         $sql .= " where branchcode IN(".$branchin.") ";
        }

        if($branchnin != null){
             $sql .= " where branchcode NOT IN(".$branchnin.") ";
            
        }
         
         $sql .= " ORDER BY branchcode asc ";
         
         echo  $sql;
       /* $this->db->select('remoteserverdatabasename,branchcode');
        $this->db->from('branches');

        if($branchin != null){
             $this->db->where("branchcode IN(".$branchin.")");
        }

        if($branchnin != null){
             $this->db->where("branchcode NOT IN(".$branchnin.")");
        };*/

      //  $this->db->where('branchcode IN("SPU")');
      //  $this->db->where('branchcode IN("MR2","MRL")');
       // $this->db->where('branchcode IN("SRV","SRT","SPU","SPT","SRN","MOL","SRM","MUZ","SRG","SRC","SBS")');
      //  $this->db->where('branchcode IN("SRG")');
        $res = $this->db->query($sql);
        $res = $res->result();
        return $res; 

     }

     public function insert_gp_analysis_header_by_sub_category($pastdays,$datetoday,$branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_sub_category_header (date_,description,levelfield1code,levelfield2code,discount,sales,markup,profit,percentage)
                select 
                '".$datetoday."',
                Products.ldesc,
                Products.LevelField2Code,
                Products.LevelField1Code,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (((sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) as markup,
                sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                (((sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end))  / NULLIF(sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)),0) )*100) as percentage
                From ".$branch.".dbo.finishedsales right join
                (select p.ProductID,p.Description,p.LevelField1Code,p.LevelField2Code,l.Description as ldesc,pVatable from ".$branch.".dbo.Products as p
                LEFT JOIN ".$branch.".dbo.LevelField2 as l on p.LevelField2Code COLLATE SQL_Latin1_General_CP1_CI_AS = l.LevelField2Code COLLATE SQL_Latin1_General_CP1_CI_AS
                where (p.LevelField2Code is not null and p.LevelField2Code  != '' and p.LevelField1Code is not null and p.LevelField1Code != '')
                and (l.LevelField2Code is not null and l.LevelField2Code != '' and l.LevelField1Code is not null and l.LevelField1Code != '')) as Products
                on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0  
                GROUP BY 
                Products.LevelField2Code,
                Products.LevelField1Code,
                Products.ldesc
                ORDER BY Products.LevelField1Code";  

          //  echo $sql; die();

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }


     }

    public function insert_gp_analysis_header_by_sub_category_daily($pastdays,$datetoday,$branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_sub_category_header_daily (date_,description,levelfield1code,levelfield2code,discount,sales,markup,profit,percentage)
                select 
                '".$datetoday."',
                Products.ldesc,
                Products.LevelField2Code,
                Products.LevelField1Code,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (((sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) as markup,
                sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                (((sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end))  / NULLIF(sum(round(extended / case when (case when finishedsales.Pvatable = 2 then finishedsales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)),0) )*100) as percentage
                From ".$branch.".dbo.finishedsales right join
                (select p.ProductID,p.Description,p.LevelField1Code,p.LevelField2Code,l.Description as ldesc,pVatable from ".$branch.".dbo.Products as p
                LEFT JOIN ".$branch.".dbo.LevelField2 as l on p.LevelField2Code COLLATE SQL_Latin1_General_CP1_CI_AS = l.LevelField2Code COLLATE SQL_Latin1_General_CP1_CI_AS
                where (p.LevelField2Code is not null and p.LevelField2Code  != '' and p.LevelField1Code is not null and p.LevelField1Code != '')
                and (l.LevelField2Code is not null and l.LevelField2Code != '' and l.LevelField1Code is not null and l.LevelField1Code != '')) as Products
                on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0  
                GROUP BY 
                Products.LevelField2Code,
                Products.LevelField1Code,
                Products.ldesc
                ORDER BY Products.LevelField1Code";  

          //  echo $sql; die();

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }


     }


     public function insert_gp_analysis_header_by_category($newcounter,$pastdays,$datetoday,$branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_header_by_category (counter,date_,levelfield1code,description,sales,profit,markup,shareofsales,shareofprofit)
                select 
                '".$newcounter."',
                '".$datetoday."',
                ISNULL(a.Description, 'NO CATEGORY'),
                ISNULL(a.LevelField1Code, '-'),
                a.extended as sales,
                a.profit as profit,
                a.markup,
                ((a.extended / (select 
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) as shareofsales,
                ((a.profit / (select 
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) shareofproft
                FROM
                (
                select 
                Products.Description,
                Products.LevelField1Code,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) as markup,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) 
                / (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))))*100) as percentage
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0 
                GROUP BY 
                Products.LevelField1Code,
                Products.Description) as a";  

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

     }


     public function insert_gp_analysis_header_by_category_daily($newcounter,$pastdays,$datetoday,$branch){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_header_by_category_daily (counter,date_,levelfield1code,description,sales,profit,markup,shareofsales,shareofprofit)
                select 
                '".$newcounter."',
                '".$datetoday."',
                ISNULL(a.Description, 'NO CATEGORY'),
                ISNULL(a.LevelField1Code, '-'),
                a.extended as sales,
                a.profit as profit,
                a.markup,
                ((a.extended / (select 
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) as shareofsales,
                ((a.profit / (select 
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) shareofproft
                FROM
                (
                select 
                Products.Description,
                Products.LevelField1Code,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) as markup,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) 
                / (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))))*100) as percentage
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0 
                GROUP BY 
                Products.LevelField1Code,
                Products.Description) as a";  

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

     }



     public function insert_gp_analysis_header($newcounter,$pastdays,$datetoday,$branch){
        
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "insert into ".$branch.".dbo.gp_analysis_header (counter,date_,sales,profit,shareofsales,shareofprofit,markup)
                select
                '".$newcounter."',
                '".$datetoday."',
                sum(a.extended) as Sales,
                sum(a.profit) as Profit,
                ((sum(a.extended) / (select 
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) as shareofsales,
                ((sum(a.profit) / (select 
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) shareofprofit,
                a.grouping          
                from
                (select 
                finishedsales.productid,
                sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as TotalCost,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as totalqty,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit,
                round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0) as markup,
                case 
                    when ((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) >= 1 and (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) < 8) THEN  FLOOR((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100)) 
                    when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0) < 0  THEN -1
                    when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0)  > 7  THEN 8
                    else 0
                end as grouping 
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0
                GROUP BY finishedsales.productid) as  a
                GROUP BY a.grouping ";

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

    }
        public function insert_gp_cat_analysis_details_daily($newcounter,$pastdays,$datetoday,$branch){
         $this->db = $this->load->database('datacenter', TRUE);
           $sql = " INSERT INTO ".$branch.".dbo.gp_analysis_details_by_category_daily(header_counter,productid,description,discount,sales,profit,markup,lvlcode,override,globalid,lvlsub1,lvlsub2,barcode,price,averagecost,totalqty)
                    select 
                    '".$newcounter."',
                    a.productid as productid,
                    a.descr as description,
                    sum(a.discount) as Discounts,
                    sum(a.extended) as sales,
                    sum(a.profit) as profit,
                    ((sum(a.profit) / sum(a.extended))*100) as markup,
                    a.LevelField1Code as LevelField1Code,
                    sum(a.proverride) as proverride,
                    a.GlobalID,
                    a.LevelField1Code as LevelField1Code,
                    a.LevelField2Code as LevelField2Code,
                    a.barcode,
                    a.price,
                    a.averageunitcost,
                    sum(a.TotalQty)
                    FROM
                    (select 
                    FinishedSales.barcode,
                    FinishedSales.price,
                    sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as averageunitcost,
					SUM(case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as TotalQty,
                    Products.GlobalID,
                    Products.productid,
                    Products.descr,
                    sum(CASE
                        WHEN AmountDiscounted != 0 
                            THEN ((price * (totalqty/Packing)) - extended)
                        ELSE 0
                    END) as discount,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                    Products.LevelField1Code,Products.LevelField2Code,
                    FinishedSales.PriceOverride,
                    CASE WHEN FinishedSales.PriceOverride = 1
                                     THEN SUM(((CASE WHEN FinishedSales.Extended < 0 THEN 0 - (FinishedSales.TotalQty / FinishedSales.packing) ELSE (FinishedSales.TotalQty / FinishedSales.packing) END)  * CASE WHEN (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 2 THEN ISNULL(pricechangehistory.tosrp, pp.srp) / 1.12 ELSE ISNULL(pricechangehistory.tosrp, pp.srp) END )) - sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) 
                                     ELSE 0
                    END  AS proverride
                    From ".$branch.".dbo.finishedsales left join (select Products.GlobalID,Products.Description as descr,Products.productid,Products.LevelField1Code,Products.LevelField2Code,Products.Pvatable, LevelField1.Description from  ".$branch.".dbo.Products LEFT JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                    LEFT JOIN  ".$branch.".dbo.POS_Products as pp on FinishedSales.ProductID = pp.ProductID and  FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS = pp.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    LEFT JOIN  ".$branch.".dbo.pricechangehistory on pricechangehistory.productid = FinishedSales.ProductID 
                    and pricechangehistory.barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS 
                    and pricechangehistory.lineid = (select max(lineid) from ".$branch.".dbo.pricechangehistory where productid = FinishedSales.ProductID and 
                    barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS and cast(dateposted as date)<= cast(FinishedSales.LogDate as date))
                    where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0 
                    GROUP BY FinishedSales.TotalQty,FinishedSales.averageunitcost,FinishedSales.barcode,FinishedSales.price,Products.productid,Products.descr,Products.LevelField1Code,Products.LevelField2Code,FinishedSales.PriceOverride,Products.GlobalID) as a
                    GROUP BY a.averageunitcost,a.TotalQty,a.barcode,a.price,a.productid,a.descr,a.LevelField1Code,a.LevelField2Code,a.GlobalID HAVING sum(a.extended) != 0
                    ";
           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

    }


    public function insert_gp_cat_analysis_details($newcounter,$pastdays,$datetoday,$branch){
         $this->db = $this->load->database('datacenter', TRUE);
           $sql = " INSERT INTO ".$branch.".dbo.gp_analysis_details_by_category(header_counter,productid,description,discount,sales,profit,markup,lvlcode,override,globalid,lvlsub1,lvlsub2)
                    select 
                    '".$newcounter."',
                    a.productid as productid,
                    a.descr as description,
                    sum(a.discount) as Discounts,
                    sum(a.extended) as sales,
                    sum(a.profit) as profit,
                    ((sum(a.profit) / sum(a.extended))*100) as markup,
                    a.LevelField1Code as LevelField1Code,
                    sum(a.proverride) as proverride,
                    a.GlobalID,
                    a.LevelField1Code as LevelField1Code,
                    a.LevelField2Code as LevelField2Code
                    FROM
                    (select 
                    Products.GlobalID,
                    Products.productid,
                    Products.descr,
                    sum(CASE
                        WHEN AmountDiscounted != 0 
                            THEN ((price * (totalqty/Packing)) - extended)
                        ELSE 0
                    END) as discount,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as profit,
                    Products.LevelField1Code,Products.LevelField2Code,
                    FinishedSales.PriceOverride,
                    CASE WHEN FinishedSales.PriceOverride = 1
                                     THEN SUM(((CASE WHEN FinishedSales.Extended < 0 THEN 0 - (FinishedSales.TotalQty / FinishedSales.packing) ELSE (FinishedSales.TotalQty / FinishedSales.packing) END)  * CASE WHEN (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 2 THEN ISNULL(pricechangehistory.tosrp, pp.srp) / 1.12 ELSE ISNULL(pricechangehistory.tosrp, pp.srp) END )) - sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) 
                                     ELSE 0
                    END  AS proverride
                    From ".$branch.".dbo.finishedsales left join (select Products.GlobalID,Products.Description as descr,Products.productid,Products.LevelField1Code,Products.LevelField2Code,Products.Pvatable, LevelField1.Description from  ".$branch.".dbo.Products LEFT JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                    LEFT JOIN  ".$branch.".dbo.POS_Products as pp on FinishedSales.ProductID = pp.ProductID and  FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS = pp.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    LEFT JOIN  ".$branch.".dbo.pricechangehistory on pricechangehistory.productid = FinishedSales.ProductID 
                    and pricechangehistory.barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS 
                    and pricechangehistory.lineid = (select max(lineid) from ".$branch.".dbo.pricechangehistory where productid = FinishedSales.ProductID and 
                    barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS and cast(dateposted as date)<= cast(FinishedSales.LogDate as date))
                    where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0 
                    GROUP BY Products.productid,Products.descr,Products.LevelField1Code,Products.LevelField2Code,FinishedSales.PriceOverride,Products.GlobalID) as a
                    GROUP BY a.productid,a.descr,a.LevelField1Code,a.LevelField2Code,a.GlobalID HAVING sum(a.extended) != 0
                    ";
           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

    }


    public function insert_gp_analysis_details($newcounter,$pastdays,$datetoday,$branch){
            $this->db = $this->load->database('datacenter', TRUE);
           ##old
            // $sql = " INSERT INTO ".$branch.".dbo.gp_analysis_details (header_counter,productid,description,discount,sales,profit,markup,grouping_)
            //         select 
            //         '".$newcounter."',
            //         finishedsales.productid,
            //         Products.descr,
            //         sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
            //         sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
            //         (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit,
            //         (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) as markup,
            //         case 
            //             when ((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) >= 1 and (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) < 8) THEN  FLOOR((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100)) 
            //             when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0) < 0  THEN -1
            //             when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0)  > 7  THEN 8
            //             else 0
            //         end as grouping 
            //         From ".$branch.".dbo.finishedsales left join (select Products.Description as descr,Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products LEFT JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
            //         where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0
            //         GROUP BY finishedsales.productid,Products.descr ";
            ## new
            $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_details (header_counter,productid,description,discount,sales,profit,override,markup,grouping_,globalid)
                    SELECT
                    '".$newcounter."',
                    a.productid,
                    a.descr,
                    sum(a.discount) as discount,
                    sum(a.extended) as sales,
                    sum(a.profit) as profit,
                    sum(a.proverride) as proverride,
                    ((sum(a.profit) / sum(a.extended))*100) as markup,
                    CASE WHEN ((sum(a.profit) / sum(a.extended))*100) >= 1 AND ((sum(a.profit) / sum(a.extended))*100) < 8  THEN floor(((sum(a.profit) / sum(a.extended))*100))
                             WHEN ((sum(a.profit) / sum(a.extended))*100) < 0 THEN -1
                             WHEN ((sum(a.profit) / sum(a.extended))*100) > 7 THEN 8
                             ELSE 0
                    END AS grouping,
                    a.GlobalID
                    FROM
                    (select
                    Products.GlobalID,       
                    finishedsales.productid,
                    Products.descr,
                    sum(CASE
                    WHEN AmountDiscounted != 0 
                        THEN ((price * (totalqty/Packing)) - extended)
                        ELSE 0
                    END) as discount,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                    (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit,
                    FinishedSales.PriceOverride,
                    CASE WHEN FinishedSales.PriceOverride = 1
                             THEN SUM(((CASE WHEN FinishedSales.Extended < 0 THEN 0 - (FinishedSales.TotalQty / FinishedSales.packing) ELSE (FinishedSales.TotalQty / FinishedSales.packing) END)  * CASE WHEN (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 2 THEN ISNULL(pricechangehistory.tosrp, pp.srp) / 1.12 ELSE ISNULL(pricechangehistory.tosrp, pp.srp) END )) - sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) 
                             ELSE 0
                    END  AS proverride
                    From ".$branch.".dbo.finishedsales left join (select Products.GlobalID,Products.Description as descr,Products.productid,Products.Pvatable from ".$branch.".dbo.Products) as Products on products.productid = finishedsales.productid
                    LEFT JOIN  ".$branch.".dbo.POS_Products as pp on FinishedSales.ProductID = pp.ProductID and  FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS = pp.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    LEFT JOIN ".$branch.".dbo.pricechangehistory on pricechangehistory.productid = FinishedSales.ProductID 
                    and pricechangehistory.barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    and pricechangehistory.lineid = (select max(lineid) from ".$branch.".dbo.pricechangehistory where productid = FinishedSales.ProductID and 
                    barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS and cast(dateposted as date)<= cast(FinishedSales.LogDate as date))
                    where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0
                    GROUP BY finishedsales.productid,FinishedSales.PriceOverride,Products.descr,finishedsales.discount,Products.GlobalID) as a
                    GROUP BY a.productid,a.descr,a.GlobalID HAVING sum(a.extended) != 0 ";

           $res = $this->db->query($sql);
           //echo $sql; die();
           if($res){
             return true;
           }else{
            return false;
           }
    }


    public function insert_generated_analysis($pastdays,$datetoday,$type){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO NEWDATACENTER.dbo.generated_gp_analysis(pastdays,gendate,bymarkup) VALUES ('".$pastdays."','".$datetoday."',".$type.")";
        $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }    

    }

      public function insert_generated_analysis_daily($pastdays,$datetoday,$type){
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "INSERT INTO NEWDATACENTER.dbo.generated_gp_analysis_daily(pastdays,gendate,bymarkup) VALUES ('".$pastdays."','".$datetoday."',".$type.")";
        $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }    

    }


     public function insert_gp_analysis_header_daily($newcounter,$pastdays,$datetoday,$branch){
        
        $this->db = $this->load->database('datacenter', TRUE);
        $sql = "insert into ".$branch.".dbo.gp_analysis_header_daily (counter,date_,sales,profit,shareofsales,shareofprofit,markup)
                select
                '".$newcounter."',
                '".$datetoday."',
                sum(a.extended) as Sales,
                sum(a.profit) as Profit,
                ((sum(a.extended) / (select 
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) as shareofsales,
                ((sum(a.profit) / (select 
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0))*100) shareofprofit,
                a.grouping          
                from
                (select 
                finishedsales.productid,
                sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as TotalCost,
                sum((allowance * finishedsales.qty) + (amountdiscounted * finishedsales.qty) + (extended-(extended * finishedsales.multiplier))) as discount,
                sum(case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as totalqty,
                sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit,
                round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0) as markup,
                case 
                    when ((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) >= 1 and (((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100) < 8) THEN  FLOOR((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100)) 
                    when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0) < 0  THEN -1
                    when round((((sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) / CASE WHEN (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) = 0 THEN 1 ELSE (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4))) END )*100),0)  > 7  THEN 8
                    else 0
                end as grouping 
                From ".$branch.".dbo.finishedsales left join (select Products.productid,Products.LevelField1Code,Products.Pvatable, LevelField1.Description from ".$branch.".dbo.Products INNER JOIN ".$branch.".dbo.LevelField1 on Products.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS = LevelField1.LevelField1Code COLLATE SQL_Latin1_General_CP1_CI_AS ) as Products on products.productid=finishedsales.productid
                where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0
                GROUP BY finishedsales.productid) as  a
                GROUP BY a.grouping ";

           $res = $this->db->query($sql);
           if($res){
             return true;
           }else{
            return false;
           }

    }


    public function insert_gp_analysis_details_daily($newcounter,$pastdays,$datetoday,$branch){
            $this->db = $this->load->database('datacenter', TRUE);
            ## new
            $sql = "INSERT INTO ".$branch.".dbo.gp_analysis_details_daily (header_counter,productid,description,discount,sales,profit,override,markup,grouping_,globalid,barcode,price,averagecost,totalqty)
                    SELECT
                    '".$newcounter."',
                    a.productid,
                    a.descr,
                    sum(a.discount) as discount,
                    sum(a.extended) as sales,
                    sum(a.profit) as profit,
                    sum(a.proverride) as proverride,
                    ((sum(a.profit) / sum(a.extended))*100) as markup,
                    CASE WHEN ((sum(a.profit) / sum(a.extended))*100) >= 1 AND ((sum(a.profit) / sum(a.extended))*100) < 8  THEN floor(((sum(a.profit) / sum(a.extended))*100))
                             WHEN ((sum(a.profit) / sum(a.extended))*100) < 0 THEN -1
                             WHEN ((sum(a.profit) / sum(a.extended))*100) > 7 THEN 8
                             ELSE 0
                    END AS grouping,
                    a.GlobalID,
                    a.barcode,
                    a.price,
                    a.averageunitcost,
                    SUM(a.TotalQty) as TotalQty
                    FROM
                    (select
                    finishedsales.barcode,
                    sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as averageunitcost,
					SUM(case when [return]= 1 then convert(money,0-totalqty) else totalqty end) as TotalQty,
                    finishedsales.price,
                    Products.GlobalID,       
                    finishedsales.productid,
                    Products.descr,
                    sum(CASE
                    WHEN AmountDiscounted != 0 
                        THEN ((price * (totalqty/Packing)) - extended)
                        ELSE 0
                    END) as discount,
                    sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) as extended,
                    (sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) - sum((averageunitcost / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 0 then 1 else 1.12 end) * case when [return]= 1 then convert(money,0-totalqty) else totalqty end)) as profit,
                    FinishedSales.PriceOverride,
                    CASE WHEN FinishedSales.PriceOverride = 1
                             THEN SUM(((CASE WHEN FinishedSales.Extended < 0 THEN 0 - (FinishedSales.TotalQty / FinishedSales.packing) ELSE (FinishedSales.TotalQty / FinishedSales.packing) END)  * CASE WHEN (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 2 THEN ISNULL(pricechangehistory.tosrp, pp.srp) / 1.12 ELSE ISNULL(pricechangehistory.tosrp, pp.srp) END )) - sum(round(extended / case when (case when FinishedSales.Pvatable = 2 then FinishedSales.Pvatable else Products.Pvatable end)  = 1 then 1.12 else 1 end,4)) 
                             ELSE 0
                    END  AS proverride
                    From ".$branch.".dbo.finishedsales left join (select Products.GlobalID,Products.Description as descr,Products.productid,Products.Pvatable from ".$branch.".dbo.Products) as Products on products.productid = finishedsales.productid
                    LEFT JOIN  ".$branch.".dbo.POS_Products as pp on FinishedSales.ProductID = pp.ProductID and  FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS = pp.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    LEFT JOIN ".$branch.".dbo.pricechangehistory on pricechangehistory.productid = FinishedSales.ProductID 
                    and pricechangehistory.barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS
                    and pricechangehistory.lineid = (select max(lineid) from ".$branch.".dbo.pricechangehistory where productid = FinishedSales.ProductID and 
                    barcode COLLATE SQL_Latin1_General_CP1_CI_AS = FinishedSales.Barcode COLLATE SQL_Latin1_General_CP1_CI_AS and cast(dateposted as date)<= cast(FinishedSales.LogDate as date))
                    where logdate >= '".$pastdays."' and logdate <= '".$datetoday."' and voided = 0
                    GROUP BY finishedsales.averageunitcost,finishedsales.TotalQty,finishedsales.barcode,finishedsales.price,finishedsales.productid,FinishedSales.PriceOverride,Products.descr,finishedsales.discount,Products.GlobalID) as a
                    GROUP BY a.averageunitcost,a.barcode,a.price,a.productid,a.descr,a.GlobalID,a.barcode,a.price HAVING sum(a.extended) != 0 ";

           $res = $this->db->query($sql);
           //echo $sql; die();
           if($res){
             return true;
           }else{
            return false;
           }
    }



}
