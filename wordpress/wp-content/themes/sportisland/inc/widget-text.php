<?php

class SI_Widget_Text extends WP_Widget{
    public function __construct()
    {
        parent::__construct('SI_Widget_Text', 'SportIsland - Текстовый виджет',
            [
                'name' => 'SportIsland - Текстовый виджет',
                'description' => 'Выводит простой текст без верстки',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('id-text'); ?>">
                Введите текст:
            </label>
            <input
                id="<?php echo $this->get_field_id('id-text'); ?>"
                type="text"
                name="<?php echo $this->get_field_name('text')?>"
                value="<?php echo $instance['text']; ?>"
                class="widefat"
            >
        </p>
<?php
    }

    public function widget($args, $instance)
    {
        //args- ключи переданные снаружи

        echo apply_filters('si_widget_text', $instance['text']);
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}