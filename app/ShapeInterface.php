<?php
/*
 * This file is part of the USC package.
 *
 * (c) Noel Barrera
 */

declare(strict_types=1);

namespace GraphicEditor;

interface ShapeInterface
{
    /** @important size is in px */
    public const MAX_WITH_MOVIL = 600;
    public const MAX_TABLE = 720;
    public const MAX_DESKTOP = 1280;

    function getShapeType(): array;

    function getShapeParams(): void;

    function getImage(): void;

    function getSizes(): array;

}