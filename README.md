# Codeigniter-Page_Builder
Simple class to help setting page titles, breadcrumbs and other misc elements that don't need a view file to be created.

## Setup
1. Add Page_builder.php to the libraries folder
2. Autoload or load from somewhere else
3. Add output tags to your views
4. SetXX and AddXX form controllers

~~~
## Breadcrumbs
$this->page_builder
			->addCrumb('Home', '/')
      ->addCrumb('Events', 'events')
      ->addCrumb('Event Detail');
      
echo $this->page_builder->outputCrumbs();

## Page Title
$this->page_builder->setTitle('Events');

echo $this->page_builder->outputTitle();

## Buttons
$this->page_builder->addButton('form_url', 'Add New');

echo $this->page_builder->outputButtons();
~~~

All the methods can be chained together, like so:

~~~
$this->page_builder
  ->setTitle('About Us')
  ->addCrumb('Home', '/')
  ->addCrumb('About Us')
  ->addButton('print_form', 'Print this Page');
~~~
