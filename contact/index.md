---
layout: layouts/post.njk
title: Contact
templateClass: tmpl-post
eleventyNavigation:
  key: Contact Me
  order: 4
---

Drop me a line?

<form name="contact" method="POST" data-netlify="true" target="_self" netlify-honeypot="bot-field">
  <fieldset>
    <legend>Contact form</legend>
      <p>
        <label>Your Name: <input type="text" name="name" placeholder="Enter name here" /></label>
      </p>
      <p>
        <label>Your Email: <input type="email" name="email" placeholder="Enter email here"/></label>
      </p>
      <p>
        <label for="requests">Request:</label> 
        <select name="requests" id="requests">
          <option value="Graphic Design">Graphic Design</option>
          <option value="Web Development">Web Development</option>
          </select>
      </p>
      <p>
        <label>Message: <textarea name="message" placeholder="Your message here" ></textarea></label>
      </p>
      <p>
          <input type="checkbox" id="Terms" name="Terms" value="Yes">
         <label for="Terms"> I have read the Terms and Conditions.</label><br>
      </p>
      <p>
      <button type="submit">Send</button>
      <p>
  </fieldset>
</form>
