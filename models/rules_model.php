<?php

class rules_model extends CI_Model
{

  public function insertrules($data)
  {
    // echo "<pre>"; print_r($data);exit;
    $this->db->insert('rules', $data);
  }


  function getDataForAddpoints()
  {
    $query = $this->db->get("rules");
    return $query->result_array();
  }


  public function insertque($que)
  {
    $this->session->userdata('user');
    $setRules = $this->db->get('quepage');
    $total = $setRules->num_rows();

    $RulesPoints = 0;
    $point = 0;
    $data = $this->db->get('rules');
    $result = $data->result_array();
   // echo "<pre>"; print_r($result); exit;
    if (empty($result)) {
      $sessionGetForId =  $this->session->userdata('id');
      $id_sel = $sessionGetForId;
     
      $que = array(
        'schoolname' => $this->input->post('schoolname'),
        'petname' => $this->input->post('petname'),
        'cricketer' => $this->input->post('cricketer'),
        'userid' => $id_sel,
        'point' => 0
      );
    } else {
      //echo "<pre>"; print_r($data2); exit;
      foreach ($result as $rules) {
        $RulesPoints = $RulesPoints + $rules['rule'];

        if ($total < $RulesPoints) {
          $point = $rules['points'];
          break;
        }
      }
      $list = $this->db->select("*")->limit(1)->order_by('id', "DESC")->get("rules")->row();
      if ($point == 0) {
        $point = $list->points;
      }

      //echo $a;exit;
      $sessionGetForId =  $this->session->userdata('id');
      $id_sel = $sessionGetForId;
      $que = array(
        'schoolname' => $this->input->post('schoolname'),
        'petname' => $this->input->post('petname'),
        'cricketer' => $this->input->post('cricketer'),
        'userid' => $id_sel,
        'point' => $point
      );
    }
    //echo "<pre>"; print_r($que); exit;
    $this->db->insert('quepage', $que);
  }

  public function getanswers()
  {
    $query = $this->db->get('question');
    return $query->result_array();
  }


  function getDataForQuepage()
  {
    $this->db->select('u.email,q.*');
    $this->db->from('quepage q');
    $this->db->join('userdata u', 'u.id = q.userid', 'left');
    $query = $this->db->get();
    //  echo $this->db->last_query();exit;
    return $query->result_array();
  }


  public function user($id)
  {
    
    $query = $this->db->get_where('quepage', array('userid' => $id));
    echo $this->db->last_query();
   // print_r($query->row_array());exit;
    return $query->row_array();
  }
}
