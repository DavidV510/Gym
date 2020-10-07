<?php 
/*
    Plugin Name: Gym  Widgets,
    Plugin URI:
    Description: Custom Widget ,
    Version:1.0.0,
    Author:David Vinter,
    
    */   

    if(!defined('ABSPATH')) die();

class Class_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Class_Widget', // Base ID
			esc_html__( 'Class Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Widget the displays classes', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $quantity=$instance['quantity'];
        ?>

        <h2 class="title">
        <?php echo esc_html($instance['title']) ?>
        </h2>
            
            <ul class="sidebar-classes">
            <?php 
            $args=array(
                'post_type'=>'gymfitness_classes',
                'posts_per_page'=>$quantity,
            );
            $classes=new WP_Query($args);


            while($classes-> have_posts()):$classes->the_post();
            ?>
                <li class="post">
                   <div class="img">
                    <?php the_post_thumbnail('thumbnail') ?>
                   </div>

                   <div class="content">
                   <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>

                        <div class="sContent">
                            <?php 
                            $start=get_field('class_hours');
                            $end=get_field('end_hour');
                            ?>
                            <p> <?php echo the_field('class_day'). " - ". $start . " to " . $end; ?></p>
                        </div>
                   </div>
                </li>

                <?php endwhile; wp_reset_postdata( ); ?>

            </ul>


        <?php 
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
        $quantity = ! empty( $instance['quantity'] ) ? $instance['quantity'] : esc_html__( '1', 'text_domain' );


		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
        <input class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
         name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
         type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>"><?php esc_attr_e( 'How much Classes:', 'text_domain' ); ?></label> 
        <input class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>"
         name="<?php echo esc_attr( $this->get_field_name( 'quantity' ) ); ?>" 
         type="number" value="<?php echo esc_attr( $quantity ); ?>" min="1">
         
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? sanitize_text_field( $new_instance['quantity'] ) : '';


		return $instance;
	}

} // class Class_Widget


// register Class_Widget widget
    function register_Class_Widget() {
        register_widget( 'Class_Widget' );
    }
    add_action( 'widgets_init', 'register_Class_Widget' );

    // add_action( 'widgets_init', function(){
    //     register_widget( 'My_Widget' );
    // });


?>