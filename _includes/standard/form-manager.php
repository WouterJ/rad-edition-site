<?php

public function editAction()
{
    $blogPost = new BlogPost();
    $form = $this->createForm('edit_blogpost', $blogPost);

    return $this->render('MyBundle:Default:edit.html.twig', array(
        'form' => $form->createView(),
    );
}

public function updateAction(Request $request)
{
    $blogPost = new BlogPost();
    $form = $this->createForm('edit_blogpost', $blogPost);
    $form->bind($request);

    if ($form->isValid()) {
        // do some stuffs with $blogPost

        return $this->redirect($this->generateUrl('blogpost_index'));
    }

    return $this->render('MyBundle:Default:edit.html.twig', array(
        'form' => $form->createView(),
    );
}