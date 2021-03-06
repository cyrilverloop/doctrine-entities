# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.0] - 2021-03-14
### Added
- `ConnectedAt`, `CreatedAt`, `UpdatedAt` and `TimestampableImmutable` traits with \DateTimeImmutable fields.

## [1.0.0] - 2021-02-22
### Added
- A default abstract entity : `IntId`.
- Some common fields in traits : `ConnectedAt`, `CreatedAt`, `UpdatedAt`, `Available` and `Priority`.
- A `Timestampable` trait which is using `CreatedAt` and `UpdatedAt`.
