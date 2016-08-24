<?php

namespace Drupal\og;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\ContentEntityInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Interface for the OG admin plugins.
 */
interface OgAdminRouteInterface extends PluginInspectionInterface {

  /**
   * Get the path of the admin.
   *
   * @return string
   *   Return the path of the route.
   */
  public function getPath();

  /**
   * Check if the current user can access to the plugin routes callback.
   *
   * @param \Drupal\Core\Entity\ContentEntityInterface $group
   *   The group entity.
   *
   * @return boolean
   *   Return if the user have access to the tasks realm.
   */
  public function access(ContentEntityInterface $group);

  /**
   * Return list of defined sub-path of the plugin.
   *
   * @return array
   *   List of routes.
   */
  public function getRoutes();

  /**
   * Get the routes easily.
   *
   * @param string $key
   *   The key which represent the route in the array.
   *
   * @return array
   *   Get the a single route form the routes list.
   */
  public function getRoute($key);

  /**
   * Get URL route from request.
   *
   * @param string $route_key
   *   The key of the route as defined in the route list array.
   * @param Request $request
   *   The current request object or a request object for a given route.
   *   Used to construct the path of the link.
   *
   * @return string
   *   The route's URL.
   */
  public function getUrlFromRoute($route_key, Request $request);

}
