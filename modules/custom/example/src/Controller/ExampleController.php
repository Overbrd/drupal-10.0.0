<?php

namespace Drupal\example\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\media\Entity\Media;
use Drupal\media\MediaInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExampleController extends ControllerBase {

  public function index(MediaInterface $video) {
//    $new_media = Media::create()
    return new JsonResponse($video->toArray());

  }

  public function main() {
    $link = Link::fromTextAndUrl('LinkTitle', Url::fromRoute('example.hello'));
//    return $link->toRenderable();
    return [
      '#type' => 'markup',
      '#markup' => $link>toString(),
    ];

  }
  public function hello() {
    return [
      '#markup' => $this->t('<!DOCTYPE html>

<head>
<meta charset=UTF-8" />

<title>QUIZ</title>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="page-wrap">

<h1>Quiz</h1>

<form action="result.php" method="post" id="quiz">

<ol>

<li>

<h3>WordPress is known as a...</h3>

<div>
<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
<label for="question-1-answers-A">A) Software </label>
</div>

<div>
<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
<label for="question-1-answers-B">B) Web App</label>
</div>

<div>
<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
<label for="question-1-answers-C">C) CMS</label>
</div>

<div>
<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
<label for="question-1-answers-D">D) Other</label>
</div>

</li>

<li>

<h3>SEO is Part Of What Field...</h3>

<div>
<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
<label for="question-2-answers-A">A) Video Editing</label>
</div>

<div>
<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
<label for="question-2-answers-B">B) Graphic Designing</label>
</div>

<div>
<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
<label for="question-2-answers-C">C) Web Designing</label>
</div>

<div>
<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
<label for="question-2-answers-D">D) Digital Marketing</label>
</div>

</li>

<li>

<h3>PHP is a Type of...</h3>

<div>
<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required />
<label for="question-3-answers-A">A) Server Side Scripting</label>
</div>

<div>
<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
<label for="question-3-answers-B">B) Programming Language</label>
</div>

<div>
<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
<label for="question-3-answers-C">C) Markup Language</label>
</div>

<div>
<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
<label for="question-3-answers-D">D) None Of Above The Above</label>
</div>

</li>

<li>

<h3>Localhost IP is Displayed As...</h3>

<div>
<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required />
<label for="question-4-answers-A">A) 192.168.0.1</label>
</div>

<div>
<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
<label for="question-4-answers-B">B) 127.0.0.0</label>
</div>

<div>
<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
<label for="question-4-answers-C">C) 1080:80</label>
</div>

<div>
<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
<label for="question-4-answers-D">D) Other</label>
</div>

</li>

<li>

<h3>Reasons to Hire Matthew Lind</h3>

<div>
<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
<label for="question-5-answers-A">A) He is Dependable and Alsways On Time</label>
</div>


<div>
<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
<label for="question-5-answers-B">B) He is a Talented Web Developer</label>
</div>

<div>
<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
<label for="question-5-answers-C">C) He is a Talented Graphic Designer</label>
</div>

<div>
<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
<label for="question-5-answers-D">D) All Above The Above</label>
</div>

</li>

</ol>

<input type="submit" value="Submit" class="submitbtn" />

</form>

</div>

</body>

</html>')
    ];
  }

}
