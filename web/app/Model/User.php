<?php class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'nivele_id' => array(
            'valid' => array(
                'rule' => array('inList', array('1', '2','3')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    var $belongsTo = 'Nivele';

    public function beforeSave($options = array()){
        if (isset($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
    }
}